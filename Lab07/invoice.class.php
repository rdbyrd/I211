<?php


class Invoice implements Payable {
    
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private static $invoice_count = 0;
    
    public function __construct($part_number, $part_description, $quantity, $price_per_item) {
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        self::$invoice_count++;
    }
    
    public function getPart_number() {
        return $this->part_number;
    }

    public function getPart_description() {
        return $this->part_description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPricePerItem() {
        return $this->price_per_item;
    }

    public function getInvoiceCount() {
        return self::$invoice_count;
    }

    public function getPaymentAmount() {
        return $this->price_per_item * $this->quantity;
    }
    
   
    
    public function toString() {
        echo "<b>Invoice:</b><br>";
        echo "Part Number: " , $this->part_number, "(" , $this->part_description , ")<br>";
        echo "Quantity: " , $this->quantity;
        echo "Price per Item: " , $this->price_per_item, "<br>";
        echo "Payment: " , $this->getPaymentAmount();
        
    }
    
}
