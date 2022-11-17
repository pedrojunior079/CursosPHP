<?php

namespace Source\Inheritance;

/**
 * Description of Address
 *
 * @author pedrojr
 */
class Address {

    private $street;
    private $number;
    private $complement;
    
    public function __construct($street, $number, $complement = null) 
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }
    
    public function getStreet() {
        return $this->street;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getComplement() {
        return $this->complement;
    }


}
