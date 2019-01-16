<?php

namespace Juanparati\DatacoreUtils\Types\Validators;

use IsoCodes\Bban;

use IsoCodes\Isin;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class ISINValidator.
 *
 * International Securities Identification Number validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class ISINValidator implements ValidatorContract
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
        return Isin::validate($data);
    }
}