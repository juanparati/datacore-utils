<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\PhoneNumber;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class PhoneValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class PhoneValidator implements ValidatorContract
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
        return PhoneNumber::validate($data, $rules);
    }
}