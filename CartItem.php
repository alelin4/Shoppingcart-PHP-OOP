<?php



class CartItem
{
    private $product;
    private int $quantity;

    // TODO Skriv en konstruktor som sätter alla properties

    function __construct($product, $quantity){

        $this -> product = $product;
        $this -> quantity = $quantity;

    }

    // TODO Skriv getters för alla properties

    public function getProduct(){

        return $this -> product;

    }

    public function getQuantity(){

        return $this -> quantity;

    }

    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
        $increase=1;
        
        return $increase;
    }
}
