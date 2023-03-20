<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

use App\ValueObjects\AddressValueObject;
use InvalidArgumentException;

class Address implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return new AddressValueObject(
            $value['address_1'],
            $value['address_2'],
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (! $value instanceof AddressValueObject) {
            return new InvalidArgumentException("The given value is not an address instance.");
        }

        return [
            'address_1' => $value->getAddress1(),
            'address_2' => $value->getAddress2(),
        ];
    } 
}
