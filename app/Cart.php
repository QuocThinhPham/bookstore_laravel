<?php

namespace App;


class Cart 
{
    public $items = null;
    public $totalAmount = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalAmount = $oldCart->totalAmount; 
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item, $id)
    {
        $storedItem = ['amount' => 0, 'price' => $item->price, 'item' => $item];
        if($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['amount']++;
        $storedItem['price'] = $item->book_price * $storedItem['amount'];
        $this->items[$id] = $storedItem;
        $this->totalAmount++;  
        $this->totalPrice += $item->book_price;
    }
}
