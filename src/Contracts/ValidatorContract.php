<?php

namespace Juanparati\DatacoreUtils\Contracts;


/**
 * Interface ValidatorContract.
 *
 * @package juanparati\DatacoreUtils\Contracts
 */
interface ValidatorContract
{

    /**
     * Validate data.
     *
     * @param $data
     * @param mixed $rules
     * @return mixed
     */
    public function __invoke($data, $rules = null) : bool;

}