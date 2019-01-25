<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;


/**
 * Class LowercaseMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class LowercaseMutator implements MutatorContract
{

    /**
     * Mutate data.
     *
     * @param $data
     * @param array $params
     * @return mixed
     */
    public function __invoke($data, ...$params)
    {
        return mb_strtolower($data);
    }
}