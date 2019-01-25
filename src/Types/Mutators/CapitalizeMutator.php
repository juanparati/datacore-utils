<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;


/**
 * Class CapitalizeMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class CapitalizeMutator implements MutatorContract
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
        return mb_convert_case($data, MB_CASE_TITLE, 'UTF-8');
    }
}