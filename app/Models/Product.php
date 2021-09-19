<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = ['name', 'description', 'price', 'discount', 'image', 'cat_id'];

    public function Category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }
}
