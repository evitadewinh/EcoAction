<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model
{
    use HasFactory;

    protected $table = 'volunteers';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'user_id', 'article_id', 'fname', 'lname', 'email', 'phone', 'city', 'state', 'postal'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Optional: Define accessor for full name
    public function getFullNameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
}