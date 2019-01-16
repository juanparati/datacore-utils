<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Exceptions\MutatorException;


/**
 * Class IntMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class IntMutator extends FloatMutator implements MutatorContract
{



    /**
     * Mutate data.
     *
     * @param $data
     * @return mixed
     * @throws MutatorException
     */
    public function __invoke($data, $settings = null)
    {
        return (int) parent::__invoke($data);
    }
}