<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class);
    // }
    // public function commande()
    // {
    //     return $this->hasMany(Commande::class);
    // }
    protected $fillable = [
        'name',
        'image',
        'email',
        'city',
        // 'email_verified_at',
        'phone',
        'birthday',
        'gender',

    ];
}
