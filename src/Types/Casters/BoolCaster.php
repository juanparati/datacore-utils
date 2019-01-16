<?php

namespace Juanparati\DatacoreUtils\Types\Casters;

use Juanparati\DatacoreUtils\Contracts\CasterContract;
use Juanparati\DatacoreUtils\Exceptions\CasterException;


/**
 * Class BoolCaster.
 *
 * @package Juanparati\Types\Casters
 */
class BoolCaster implements CasterContract
{

    /**
     * Cast data to bool.
     *
     * @param $data
     * @return mixed
     * @throws CasterException
     */
    public function __invoke($data)
    {
        return !empty($data);
    }
}