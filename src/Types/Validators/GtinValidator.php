<?php


namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Gtin;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class GTINValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class GtinValidator  implements ValidatorContract
{

    /**
     * Different barcode lengths.
     */
    const BARCODE_LENGTHS =
    [
         8,     // EAN-8
        12,     // UPC-A, UPC-E, UCC-12
        13,     // EAN-13, JAN
        14,     // EAN, UCC-14
    ];


    /**
     * Validate data.
     *
     * @see https://www.gtin.info/
     * @param $data
     * @param mixed $rules
     * @return mixed
     */
    public function __invoke($data, $rules = null): bool
    {
        if ($rules)
            return Gtin::check($data, $rules);

        foreach (static::BARCODE_LENGTHS as $length)
        {
            if (Gtin::check($data, $length))
                return true;
        }

        return false;
    }
}