<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','product_id','delivery_address','phone','total', 'city'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
