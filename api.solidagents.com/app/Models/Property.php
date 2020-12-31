<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = "properties";

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function property_image(){
        return $this->hasMany('App\Models\Property_image');
    }
}