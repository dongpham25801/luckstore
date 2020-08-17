<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($cart){
        if ($cart){
            $this->items = $cart->items;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        }
    }

    public function addCart($item, $id){
        $newPro = ['sl' => 0,'price' => $item->price, 'productInfo' => $item];
        if ($this->items){
            if (array_key_exists($id, $this->items)){
                $newPro = $this->items[$id];
            }
        }
        $newPro['sl']++;
        $newPro['price'] = $newPro['sl'] * $item->price;
        $this->items[$id] = $newPro;
        $this->totalPrice += $item->price;
        $this->totalQty++;
    }

    public function delItem($id){
        $this->totalQty -= $this->items[$id]['sl'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function updateCart($id, $qty){
//        $this->items[$id][''] =;
        $this->totalPrice -= $this->items[$id]['price'];
        $this->totalQty -= $this->items[$id]['sl'];

        $this->items[$id]['sl'] = $qty;
        $this->items[$id]['price'] = $qty * $this->items[$id]['productInfo']->price;

        $this->totalPrice += $this->items[$id]['price'];
        $this->totalQty += $this->items[$id]['sl'];
    }

}
