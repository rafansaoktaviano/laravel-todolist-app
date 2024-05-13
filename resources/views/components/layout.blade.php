<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>


<body class=" min-w-full h-full w-full bg-[#153677] pb-[200px]">

    <div class="h-full">
        <div class="h-[100px] w-full bg-transparent flex justify-between items-center  px-[40px]">
            <h1 class="bg-bold text-white text-[24px]">Todo List</h1>
            @guest
            <div class="flex items-center gap-5">
                <x-button class="cursor-pointer px-6 py-3 text-blue-300  rounded-xl"><a
                        href="/signup">Register</a></x-button>
                <x-button class="cursor-pointer px-6 py-3 bg-blue-400 text-white rounded-xl"><a
                        href="/signin">Login</a></x-button>
            </div>
            @endguest
            @auth
            <form class="" action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex items-center gap-5">
                    <x-button class="cursor-pointer px-6 py-3 text-blue-300  rounded-xl">Logout</x-button>
                </div>
            </form>
            @endauth
        </div>
        <div class="w-full  mt-[200px]  flex justify-center items-center ">
            {{ $slot }}
        </div>
    </div>
</body>

</html>