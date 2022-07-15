<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function realestates(){
        return $this->hasMany(RealEstate::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
