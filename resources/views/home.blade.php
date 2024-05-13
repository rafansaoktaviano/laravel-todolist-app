<x-layout>
    <div class="w-[500px]  h-auto p-[20px] bg-white rounded-[10px]">
        <div class="flex items-center mb-[10px] ">
            <h1 class="font-bold text-[24px]">To Do List</h1>

        </div>
        <form method="POST" action="/add-task"
            class="w-full bg-[#edeef0] rounded-3xl h-auto relative flex items-center">

            @csrf

            <input name="task" type="text" class="w-full cursor-pointer border-none text-[12px] py-2 outline-none   bg-transparent  pr-[150px]
        rounded-l-3xl placeholder:text-slate-600 px-4" placeholder="Add your task" />

            <button type="submit" class="py-3 font-semibold px-12 ml-[-20%] bg-[#009EED] text-white rounded-3xl">
                Add
            </button>
        </form>

        @foreach ($tasklists as $tasklist)
        <form class="" method="POST" action="/delete-task/{{ $tasklist->id }}">
            @csrf
            @method('DELETE')
            <div class="flex justify-between items-center gap-3 my-[20px]">
                <div class="flex items-center gap-3">
                    <input type="checkbox" name="check" {{ $tasklist->isCompleted == true ? 'checked' : "" }}
                    name="tasks"
                    class="pointer-events-none w-[20px] h-[20px] border-2 rounded-full border-solid checked:bg-[#009EED]
                    outline-none cursor-pointer" />
                    <input type="text" class="hidden" type="submit" form="check-task">
                    <label class='cursor-pointer'>
                        {{ $tasklist->task }}
                    </label>
                </div>
                <div class=" flex items-center gap-5">
                    <a href="/edit-task/edit/{{ $tasklist->id }}">
                        <x-button type="submit" form="edit-task" name="btn" value="{{ $tasklist->id }}"
                            class=" transform duration-1000 cursor-pointer text-[12px] hover:scale-125">
                            Edit
                        </x-button>
                    </a>
                    <x-button type="submit"
                        class="text-red-500 transform duration-1000 cursor-pointer text-[12px] hover:scale-125">
                        Delete
                    </x-button>
                    <x-button type="submit" form="check-task" name="btn" value="{{ $tasklist->id }}"
                        class="text-green-700 transform duration-1000 cursor-pointer text-[12px] hover:scale-125">
                        {{
                        $tasklist->isCompleted == true
                        ?
                        'Mark as Incomplet' : 'Mark as Completed' }}
                    </x-button>
                </div>
            </div>
        </form>
        <form id="check-task" method="POST" class="hidden" action="/check-task/">
            @csrf
            @method('PATCH')
        </form>
        @endforeach



        <!-- <form id="edit-task" method="POST" class=" hidden" action="/edit-task/edit">
            @csrf
            @method('PATCH')
        </form> -->

    </div>
</x-layout>