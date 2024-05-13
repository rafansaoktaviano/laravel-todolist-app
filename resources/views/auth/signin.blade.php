<x-layout>
    <form action="/signin" method="POST">
        @csrf
        <div class="w-[500px]  h-auto p-[20px] bg-white rounded-[10px]">
            <h1 class="text-[24px] text-center font-bold">Sign In</h1>
            <div class="mb-[10px]">
                <label for="email">Email</label>
                <input name="email" id="email" placeholder="Johndoe@gmail.com" type="email" required
                    class="border mt-[10px] w-full border-2 border-black/20 px-4 py-2 rounded-xl">
            </div>
            <div>
                <label class="mb-[10px]" for="password">Password</label>
                <input name="password" id="password" placeholder="******" type="password" required
                    class="border mt-[10px] w-full border-2 border-black/20 px-4 py-2 rounded-xl">
            </div>

            <div class="my-[25px] flex justify-center items-center gap-3">
                <span>Don't have an account ?</span> <a class="text-blue-500" href="/signup">Sign Up</a>
            </div>

            <x-button class=" w-full text-white rounded-xl bg-blue-400 py-2">
                Sign In
            </x-button>

            @error('email')
            <p>{{ $message }}</p>
            @enderror
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
    </form>
</x-layout>