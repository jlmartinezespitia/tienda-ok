<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['clave','nombre','slug','descripcion','extract','imagen','visible','category_id'];

    //Relation with Category
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    //Relación con OrderItem
    public function order_item()
    {
    	return $this->hasOne('App\OrderItem');
    }
}
