<?php

namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Isbn;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class ISBNValidator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class IsbnValidator implements ValidatorContract
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
        return Isbn::validate($data);
    }
}