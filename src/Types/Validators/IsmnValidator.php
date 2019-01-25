<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Ismn;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class ISMNValidator.
 *
 * International Standard Music Number validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class IsmnValidator implements ValidatorContract
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
        return Ismn::validate($data);
    }
}