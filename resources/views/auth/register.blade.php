<x-layout>
    <h1 class="title items-center">Register New Users</h1>


    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post">
            @csrf
            {{--  this is token used for cross site security and is mandatory for websites wth method post --}}

            {{-- username --}}
            <div class="mb-4">
                <label for="username"> UserName</label>
                <input type="text" name="username" value="{{ old('username') }}"
                    class="input @error('username') ring-red-500 @enderror">
                {{-- error directive takes key of the error we want to show --}}
                @error('username')
                    <p class="error">
                        {{ $message }}</p>
                @enderror

            </div>

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

            {{-- confirm Password --}}
            <div class="mb-8">
                <label for="password_confirmation"> Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="input  @error('password') ring-red-500 @enderror">

            </div>

            {{-- button register --}}
            <button class="btn"> Register</button>

        </form>

    </div>
</x-layout>
