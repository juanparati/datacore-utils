<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Sscc;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class SSCCValidator.
 *
 * Shipping Container Code validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class SsccValidator implements ValidatorContract
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
        return Sscc::validate($data);
    }
}