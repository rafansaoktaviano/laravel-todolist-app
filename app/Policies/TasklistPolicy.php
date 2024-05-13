<?php

namespace App\Policies;

use App\Models\Tasklist;
use App\Models\Tasklists;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class TasklistPolicy
{
    public function edit(User $user, Tasklists $id)
    {
        return $id->user->is(Auth::user());
    }
}
