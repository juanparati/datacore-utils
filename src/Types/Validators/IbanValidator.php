<?php

namespace Juanparati\DatacoreUtils\Types\Validators;

use IsoCodes\Iban;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class IBANValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class IbanValidator implements ValidatorContract
{

    /**
     * Validate data.
     *
     * @param $data
     * @param mixed $rules
     * @return mixed
     */
    public function __invoke($data, $rules = null): bool
    {
        return Iban::validate($data);
    }
}