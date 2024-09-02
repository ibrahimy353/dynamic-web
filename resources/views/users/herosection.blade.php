<div class="card mb-4">

    <h2 class="font-bold mb-4">Create a new Post</h2>

    {{-- session messages --}}
    @if (session('success'))
        <x-flashMsg msg="{{ session('success') }}" />
    @elseif (session('delete'))
        <x-flashMsg msg="{{ session('delete') }}" bg="bg-red-500" />
    @endif

    {{-- create Post Form --}}

    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        {{-- Post Title --}}
        <div class="mb-4">
            <label for="slideName"> Post Title</label>
            <input type="text" name="slideName" value="{{ old('slideName') }}"
                class="input @error('title') ring-red-500 @enderror">
            @error('slideName')
                <p class="error">
                    {{ $message }}</p>
            @enderror
        </div>


        {{-- Post Body --}}
        <div class="mb-4">
            <label for="body"> Post Content</label>
            <textarea name="body" rows="5" class="input @error('body') ring-red-500 @enderror">{{ old('body') }}</textarea>

            @error('body')
                <p class="error">
                    {{ $message }}</p>
            @enderror
        </div>
        {{-- Post Image --}}
        <div class="mb-4">
            <label for="image">Cover Photo</label>
            <input type="file" name="image" id="image">


            @error('image')
                <p class="error">
                    {{ $message }}</p>
            @enderror
        </div>

        {{-- button register --}}
        <button class="btn"> Create</button>
    </form>
</div>
{{-- User Posts --}}
<h2 class="font-bold mb-4">Check Out The Post</h2>
<div class="grid grid-cols-2 gap-6">




</div>

<div>

</div>
