<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href= "/css/app.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 text-slate-900">
    <header class="bg-white shadow-lg w-full sticky ">
        <nav>
            <a href="{{ route('posts.index') }}" class="nav-link bg-black "> <img
                    src=" ./storage/posts_images/logo.png" /></a>

            <li class="flex flex-wrap justify-around">
                <nav>Feature</nav>
                <nav>Case Studies</nav>
                <nav>Pricing</nav>
                <nav>Contact Us</nav>
            </li>
            @auth
                <div class="relative
                    grid  place-items-center" x-data="{ open: false }">
                    {{-- Dropdown menu button --}}
                    <button @click="open = !open" type="button" class="round-btn">
                        <img src=" ./storage/posts_images/logo.png" />
                    </button>

                    {{-- Dropdown Menu --}}
                    <div x-show="open" @click.outside="open:false"
                        class="bg-white shadow-lg absolute top-10 text-black  right-0 rounded-lg overflow-hidden font-light">

                        <p class="username">{{ auth()->user()->username }}</p>
                        <a href="{{ route('dashboard') }}"
                            class="block text-black  hover:bg-slate-100 pl-4 pr-8 py-2 mb-1">Dashboard</a>

                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="block w-full text-black  text-left hover:bg-slate-100 pl-4 pr-8 py-2">
                                Logout</button>
                        </form>

                    </div>
            </div> @endauth

            @guest
                <div class="flex text-black flex-wrap items-center gap-4  ">
                    <a href="{{ route('login') }}"
                        class="nav-link  bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded ">Login</a>
                    <a href="{{ route('register') }}"
                        class="nav-link bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounde ">Register</a>
            </div> @endguest
        </nav>
    </header>
    <main class="py-8
                    px-4 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
</body>

</html>
