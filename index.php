<?php


    class Product {
       protected $items;

        public function __construct(array $items)
        {
            $this->items = $items;
        }

        public function sum($key){
            return array_sum(array_map(function($item) use ($key) {
                    return $item->$key;
                },$this->items));
        }
    }

    class Item {
        public $name;
        public $amount;

        public function __construct($name, $amount)
        {
            $this->name = $name;
            $this->amount = $amount;
        }
    }


    $products = new Product([
        new Item('Mouse', 400),
        new Item('Keyboard',200),
        new Item('Monitor',100),
    ]);

//    var_dump($products);

    echo $products->sum('amount');