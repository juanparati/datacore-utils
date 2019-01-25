<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class EqualToValidator.
 * 
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class EqualtoValidator implements ValidatorContract
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
        return $data == $rules;
    }
}