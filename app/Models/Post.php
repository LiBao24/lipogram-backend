<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id_post';

    protected $fillable = [
        'id_user',
        'media',
        'caption',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_post', 'id_post');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'id_post', 'id_post');
    }
}
