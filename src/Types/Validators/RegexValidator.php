<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Ismn;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class RegexValidator.
 *
 * Regex Validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class RegexValidator implements ValidatorContract
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
        return (bool) preg_match($rules, $data);
    }
}