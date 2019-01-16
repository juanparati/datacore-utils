<?php

namespace Juanparati\DatacoreUtils\Types\Casters;

use Juanparati\DatacoreUtils\Contracts\CasterContract;
use Juanparati\DatacoreUtils\Exceptions\CasterException;


/**
 * Class StringCaster.
 *
 * @package Juanparati\Types\Casters
 */
class StringCaster implements CasterContract
{

    /**
     * Cast data to string.
     *
     * @param $data
     * @return mixed
     * @throws CasterException
     */
    public function __invoke($data)
    {
        if (is_object($data) || is_array($data))
            throw new CasterException('Unable to convert (' . gettype($data) . ') to string');

        return (string) $data;
    }
}