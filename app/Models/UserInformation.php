<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    protected $table = "personal_information";
    protected $fillable = [
        'phone',
        'country',
        'address',
        'city',
        'postCode',
    ];


    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
