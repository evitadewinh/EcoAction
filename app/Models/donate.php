<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donate extends Model
{
    use HasFactory;

    protected $table = 'donates';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'country',
        'city',
        'street',
        'donation',
        'proof',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }

}
