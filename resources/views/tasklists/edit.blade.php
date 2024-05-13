<x-layout>


    <div class="w-[500px]  h-auto p-[20px] bg-white rounded-[10px]">
        <div class="flex items-center mb-[10px] ">
            <h1 class="font-bold text-[24px]">Edit</h1>

        </div>
        <form method="POST" action="/save-task/{{ $tasklist->id }} "
            class="w-full bg-[#edeef0] rounded-3xl h-auto relative flex items-center">
            @csrf
            <input name="task" value="{{ $tasklist->task }}" type="text" class="w-full cursor-pointer border-none text-[12px] py-2 outline-none   bg-transparent  pr-[150px]
        rounded-l-3xl placeholder:text-slate-600 px-4" placeholder="Add your task" />

            <button type="submit" class="py-3 font-semibold px-12 ml-[-20%] bg-[#009EED] text-white rounded-3xl">
                Save
            </button>
        </form>
    </div>
</x-layout>