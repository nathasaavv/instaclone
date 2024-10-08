<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'caption',
        'likes',
        'comments',


    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($comment)
    {
        $this->comments[] = $comment;
        $this->save();
    }
}
