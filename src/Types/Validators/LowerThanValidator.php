<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class LowerThanValidator
 * 
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class LowerThanValidator implements ValidatorContract
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
        return $data < $rules;
    }
}