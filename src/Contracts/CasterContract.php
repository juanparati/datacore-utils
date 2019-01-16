<?php

namespace Juanparati\DatacoreUtils\Contracts;


/**
 * Interface CasterContract.
 *
 * @package juanparati\DatacoreUtils\Contracts
 */
interface CasterContract
{

    /**
     * Cast data.
     *
     * @param $data
     * @return mixed
     */
    public function __invoke($data);

}