<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fiilable=[
        'name',
        'email',
        'number',
        'medicine',
    ];
    use HasFactory;
}
