<?php

namespace Juanparati\DatacoreUtils\Types\Casters;

use Juanparati\DatacoreUtils\Contracts\CasterContract;
use Juanparati\DatacoreUtils\Exceptions\CasterException;


/**
 * Class IntCaster.
 *
 * @package Juanparati\Types\Casters
 */
class IntCaster implements CasterContract
{

    /**
     * Regular expression that detects a cast-able string.
     */
    const INT_CASTABLE_REGEX = '/^([0-9,\.]+)/';


    /**
     * Cast data to int.
     *
     * @param $data
     * @return mixed
     * @throws CasterException
     */
    public function __invoke($data)
    {
        if (!is_int($data) && !preg_match(static::INT_CASTABLE_REGEX, trim($data)))
            throw new CasterException('Unable to convert '. $data . ' (' . gettype($data) . ') to integer');

        return (int) $data;
    }
}