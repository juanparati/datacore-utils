<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;


/**
 * Class TrimMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class TrimMutator implements MutatorContract
{

    /**
     * Mutate data.
     *
     * @param $data
     * @return mixed
     */
    public function __invoke($data, $settings = null)
    {
        return $settings ? trim($data, $settings) : trim($data);
    }
}