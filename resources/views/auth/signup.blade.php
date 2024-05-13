<x-layout>
    <form action="/signup" method="POST">
        @csrf

        <div class="w-[500px]  h-auto p-[20px] bg-white rounded-[10px]">
            <h1 class="text-[24px] text-center font-bold">Sign Up</h1>
            <div class="mb-[10px]">
                <label for="username">Username</label>
                <input id="username" name="name" placeholder="Johndoe" type="text" required
                    class="border mt-[10px] w-full border-2 border-black/20 px-4 py-2 rounded-xl">
            </div>
            <div class="mb-[10px]">
                <label for="email">Email</label>
                <input id="email" name="email" placeholder="Johndoe@gmail.com" type="email" required
                    class="border mt-[10px] w-full border-2 border-black/20 px-4 py-2 rounded-xl">
            </div>
            <div>
                <label class="mb-[10px]" for="password">Password</label>
                <input id="password" name="password" placeholder="******" type="password" required
                    class="border mt-[10px] w-full border-2 border-black/20 px-4 py-2 rounded-xl">
            </div>
            <div class="mt-[10px]">
                <label class="mb-[10px] " for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" placeholder="******" type="password"
                    required class="border mt-[10px] w-full border-2 border-black/20 px-4 py-2 rounded-xl">
            </div>

            <div class="my-[25px] flex justify-center items-center gap-3">
                <span>Have an account ?</span> <a class="text-blue-500" href="/signin">Sign In</a>
            </div>

            <x-button type="submit" class=" w-full text-white rounded-xl bg-blue-400 py-2">
                Sign Up
            </x-button>
        </div>
    </form>
</x-layout>