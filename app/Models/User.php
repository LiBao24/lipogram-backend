<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function profiles()
    {
        return $this->hasOne(Profile::class, 'id_user', 'id_user');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'id_user', 'id_user');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_user', 'id_user');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'id_user', 'id_user');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'id_user', 'id_user');
    }

    public function searches()
    {
        return $this->hasMany(Search::class, 'id_user', 'id_user');
    }
}
