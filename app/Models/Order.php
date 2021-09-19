<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";
    protected $fillable = ['description', 'date', 'price', 'quantity', 'totalPrice', 'image', 'user_id'];

    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
