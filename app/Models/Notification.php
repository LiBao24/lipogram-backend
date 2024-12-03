<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    protected $primaryKey = 'id_notifikasi';

    protected $fillable = [
        'id_post',
        'id_user',
        'isi_notifikasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post', 'id_post');
    }
}
