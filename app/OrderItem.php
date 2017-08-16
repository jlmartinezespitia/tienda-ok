<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $table = 'order_items';
    protected $fillable = ['price','quantity','product_id','order_id'];
    public $timestamps = false;

    // Relación con Order
    public function order()
    {
    	return $this->belongsTo('App\Order');
    }

    // Relación con producto
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
