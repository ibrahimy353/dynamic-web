<x-layout>
    <h1 class="title">Latest Posts</h1>

    {{-- List of Post --}}
    <div class="grid grid-cols-2 gap-6">

        @foreach ($posts as $post)
            {{-- creates a loop of the post to appear on the grid with column --}}
            <x-postCard :post="$post" />
        @endforeach

    </div>

    {{-- pagination links --}}
    <div>
        {{ $posts->links() }}
    </div>
</x-layout>
