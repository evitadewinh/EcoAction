<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = ['title', 'description', 'image'];

    public function volunteers()
    {
        return $this->hasMany(Volunteers::class);
    }
}