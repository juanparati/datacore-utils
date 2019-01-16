<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Iswc;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class ISWCValidator.
 *
 * International Standard Musical Work Code validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class ISWCValidator implements ValidatorContract
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
        return Iswc::validate($data);
    }
}