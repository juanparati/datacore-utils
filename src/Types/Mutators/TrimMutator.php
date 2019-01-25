<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Helpers\DynamicParams;


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
    public function __invoke($data, ...$params)
    {
        $params = DynamicParams::flatVariadicParams($params);

        return $params[0] ? trim($data, $params[0]) : trim($data);
    }
}