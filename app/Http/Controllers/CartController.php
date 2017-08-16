<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Order;
use App\OrderItem;

class CartController extends Controller
{
   public function __construct() {
   		if(!\Session::has('cart')) \Session::put('cart',array());
   }
    
    //Show Cart
   public function show()
   {
   	$categories = Category::all();
      $cart = \Session::get('cart');
      $total = $this -> total();
      return view('store.cart', compact('cart', 'total'), compact('categories'));
   }
    
    //Add Item
   public function add(Product $product){
   		$cart = \Session::get('cart');
   		$product->cantidad = 1;
   		$cart[$product->slug] = $product;
   		\Session::put('cart',$cart);

   		return redirect()->route('cart-show');
   }

   //Delete item
    public function delete(Product $product){
         $cart = \Session::get('cart');
         unset($cart[$product->slug]);
         \Session::put('cart',$cart);

         return redirect()->route('cart-show');
    }

//Update item
    public function update(Product $product, $cantidad){
         $cart = \Session::get('cart');
         $cart[$product->slug]->cantidad = $cantidad;
         \Session::put('cart',$cart);

         return redirect()->route('cart-show');
    }

    //Trash cart
    public function trash(Product $product){
         \Session::forget('cart');

         return redirect()->route('cart-show');
    }

    //Total
    private function total(){
      $cart = \Session::get('cart');
      $total=0;
      foreach($cart as $item){
            $total += $item->price * $item->quantity;
      }
      return $total;
    }

    //Detalle del pedido
    public function orderDetail()
    {
      if (count(\Session::get('cart')) <= 0) return redirect()->route('home');
      $cart = \Session::get('cart');
      $total = $this->total();
      $categories = Category::all();
      return view('store.order-detail', compact('cart','total','categories'));
    }

//Guardar el pedido en BD
    //...
    $this->saveOrder();
    \Session::forget('cart');
    //...

    public function saveOrder()
    {
      $subtotal = 0;
      $cart = \Session::get('cart');
      $shipping = 100;
      foreach($cart as $producto){
        $subtotal += producto->quantity * $producto->price;
      }
      $order = Order::create([
        'subtotal' => $subtotal,
        'shipping' => $shipping,
        'user_id' => \Auth::user()->id
      ]);
      foreach ($$cart as $producto) {
        $this->saveOrderItem($producto,$order->id);
      }
    }

    protected function saveOrderItem($producto,$order_id)
    {
      OrderItem::create([
        'price' => $producto->price,
        'quantity' => $producto->quantity,
        'product_id' => $producto->id,
        'order_id' => $order_id,
      ]);
    }
}
