<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Exceptions\MutatorException;


/**
 * Class CeilMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class CeilMutator extends FloatMutator implements MutatorContract
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
        return ceil(parent::__invoke($data));
    }
}