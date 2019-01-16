<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\SwiftBic;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class SwiftValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class SwiftValidator implements ValidatorContract
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
        return SwiftBic::validate($data);
    }
}