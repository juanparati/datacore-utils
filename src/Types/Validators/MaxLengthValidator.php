<?php

namespace Juanparati\DatacoreUtils\Types\Validators;

use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class MaxLengthValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class MaxLengthValidator implements ValidatorContract
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
        return mb_strlen($data) <= $rules;
    }
}