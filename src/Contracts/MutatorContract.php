<?php

namespace Juanparati\DatacoreUtils\Contracts;


/**
 * Interface MutatorContract.
 *
 * @package juanparati\DatacoreUtils\Contracts
 */
interface MutatorContract
{

    /**
     * Mutate data.
     *
     * @param $data
     * @return mixed
     */
    public function __invoke($data, $settings = null);

}