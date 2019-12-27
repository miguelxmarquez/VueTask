<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'content'];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
