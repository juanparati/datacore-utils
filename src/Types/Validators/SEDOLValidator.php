<?php
namespace Juanparati\DatacoreUtils\Types\Validators;


use IsoCodes\Sedol;
use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class SedolValidator.
 *
 * Stock Exchange Code validator.
 *
 * @package Juanparati\DatacoreUtils\Types\Validators
 */
class SEDOLValidator implements ValidatorContract
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
        return Sedol::validate($data);
    }
}