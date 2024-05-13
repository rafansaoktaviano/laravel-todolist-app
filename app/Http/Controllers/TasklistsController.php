<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasklistRequest;
use App\Http\Requests\UpdateTasklistRequest;

use App\Models\Tasklists;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use ProtoneMedia\Splade\Facades\Toast;

class TasklistsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        return view('home', ['tasklists' => Tasklists::where('user_id', $userId)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store()
    {
        if (Auth::guest()) {
            return redirect('/signin');
        }

        request()->validate([
            'task' => ['required']
        ]);



        Tasklists::create([
            'task' => request('task'),
            'user_id' => Auth::user()->id,
            'isCompleted' => false
        ]);



        return redirect('/');
    }
    public function show(Tasklists $tasklist)
    {
        //
    }
    public function edit()
    {

        $id = request('btn');
        $tasklist = Tasklists::find($id);

        $isCompleted = $tasklist->isCompleted == true ? false : true;

        $tasklist->update([
            'isCompleted' => $isCompleted
        ]);

        return redirect('/');
    }
    public function update($id)
    {
        return view('tasklists.edit', ['tasklist' => Tasklists::find($id)]);
    }
    public function saveTask(Tasklists $id)
    {
        Gate::define('save', function (User $user, Tasklists $id) {
            return $id->user->is(Auth::user());
        });

        Gate::authorize('save', $id);
        request()->validate([
            'task' => ['required']
        ]);

        Tasklists::where('id', $id->id)->update([
            'task' => request('task')
        ]);

        return redirect('/');
    }


    public function destroy($id)
    {
        Tasklists::destroy($id);

        return redirect('/');
    }
}
