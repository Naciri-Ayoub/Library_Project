<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'image',
        'description',
        'code_bare',
        'category_id',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
    // one to many
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
