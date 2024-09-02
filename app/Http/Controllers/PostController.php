<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Post;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

// class PostController extends Controller implements HasMiddleware
class PostController extends Controller
{

    // public static function middleware(): array
    // {
    //     return [
    //         new Middleware('auth', except: ['index', 'show'])
    //     ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        Mail::to('mike@email.com')->send(new WelcomeMail());

        // read about eloquent model in laravel docs
        $posts = Post::latest()->paginate(6);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required'],
            'image' => ['nullable', 'file', 'max:2000', 'mimes:png,jpg,webp']

        ]);

        // Store Image if exists
        $path = null;
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('posts_images', $request->image);
        }

        //Create the Post
        Auth::user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path

        ]);

        //Redirect the user to dashboard
        return back()->with('success', 'Your post was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // Gate facade is policy that allows oridigal user to control the editing alone
        Gate::authorize('modify', $post);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // only Authorized user can update
        Gate::authorize('modify', $post);


        //validate
        $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required'],
            'image' => ['nullable', 'file', 'max:2000', 'mimes:png,jpg,webp,jfif']
        ]);

        // Store Image if exists
        $path = $post->image ?? null;
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $path = Storage::disk('public')->put('posts_images', $request->image);
        }


        //Update the Post
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path
        ]);

        //Redirect the user to dashboard
        return redirect()->route('dashboard')->with('success', 'Your post was updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // only Authorized user can delete
        Gate::authorize('modify', $post);
        //Delete post image if it exists
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        // Delete the Post
        $post->delete();

        // Redirect back to dahsboard
        return back()->with('delete', 'Your post was deleted!');
    }
}
