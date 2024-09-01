<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_image',
        'text',
        'user_id'
    ];
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
