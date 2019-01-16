<?php

namespace Juanparati\DatacoreUtils\Types\Validators;

use IsoCodes\Bban;

use IsoCodes\ZipCode;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class ZIPValidator.
 *
 * Zip code validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class ZIPValidator implements ValidatorContract
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
        return ZipCode::validate($data, $rules);
    }
}