<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasklists extends Model
{
    use HasFactory;
    protected $table = 'tasklists';
    protected $fillable = ['task', 'isCompleted', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
