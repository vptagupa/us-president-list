<?php

namespace App\ValueObjects;

/**
 * This class is immutable
 * If you need to change its value, you should create a new instance
 */
class AddressValueObject
{

    public function __construct(private string $address1, private string $address2 = '')
    {
        // 
    }

    public static function load(string $address1, string $address2 = '')
    {
        return new Self($address1, $address2);
    }

    public function getAddress1()
    {
        return $this->address1;
    }

    public function getAddress2()
    {
        return $this->address2;
    }
}