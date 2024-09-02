<x-layout>
    <h1 class="title items-center">Welcome Back</h1>


    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('login') }}" method="post">
            @csrf
            {{--  this is token used for cross site security and is mandatory for websites wth method post --}}



            {{-- email --}}
            <div class="mb-4">
                <label for="email"> Email</label>
                <input type="text" name="email" value="{{ old('username') }}"
                    class="input @error('email') ring-red-500 @enderror">
                @error('email')
                    <p class="error">
                        {{ $message }}</p>
                @enderror
            </div>


            {{-- password --}}
            <div class="mb-4">
                <label for="password"> Password</label>
                <input type="password"name="password" class="input @error('password') ring-red-500 @enderror">
                @error('password')
                    <p class="error">
                        {{ $message }}</p>
                @enderror

            </div>

            {{-- Remember CheckBox --}}
            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember"> Remember Me</label>
            </div>
            @error('failed')
                <p class="error">
                    {{ $message }}</p>
            @enderror

            {{-- button register --}}
            <button class="btn"> Login</button>

        </form>

    </div>
</x-layout>
