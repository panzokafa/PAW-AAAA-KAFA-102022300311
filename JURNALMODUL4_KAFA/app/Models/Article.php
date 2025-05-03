<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;



class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = ['title', 'content', 'image'];

    /**
     * Buat relasi bahwa artikel ini dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
