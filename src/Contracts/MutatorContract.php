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
     * @param array $params
     * @return mixed
     */
    public function __invoke($data, ...$params);

}