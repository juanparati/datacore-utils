<?php

namespace Juanparati\DatacoreUtils\Types\Validators;

use IsoCodes\CreditCard;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;

/**
 * Class CreditCardValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class CreditcardValidator implements ValidatorContract
{


    /**
     * Validate data
     *
     * @param $data
     * @param mixed $rules
     * @return mixed
     */
    public function __invoke($data, $rules = null): bool
    {
        return CreditCard::validate($data);
    }
}