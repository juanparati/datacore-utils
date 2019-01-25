<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;


/**
 * Class UppercaseMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class UppercaseMutator implements MutatorContract
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
        return mb_strtoupper($data);
    }
}