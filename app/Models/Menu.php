<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item_name',
        'category_id',
        'item_des',
        'item_image',
        'item_price',
    
    ];

    function category(){

        return $this->belongsTo('App\Models\Category', 'category_id');
       
     }

     function cart(){

        return $this->hasMany('App\Models\Cart', 'item_id');
    }
}
