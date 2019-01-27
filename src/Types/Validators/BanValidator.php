<?php

namespace Juanparati\DatacoreUtils\Types\Validators;

use IsoCodes\Bban;

use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class BBANValidator.
 *
 * Basic Bank Account Number validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class BanValidator implements ValidatorContract
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
        return Bban::validate($data);
    }
}