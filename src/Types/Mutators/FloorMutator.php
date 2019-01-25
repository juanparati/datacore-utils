<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Exceptions\MutatorException;


/**
 * Class FloorMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class FloorMutator extends FloatMutator implements MutatorContract
{

    /**
     * Mutate data.
     *
     * @param $data
     * @param array $params
     * @return mixed
     * @throws MutatorException
     */
    public function __invoke($data, ...$params)
    {
        return floor(parent::__invoke($data));
    }
}