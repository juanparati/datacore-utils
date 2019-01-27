<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Helpers\DynamicParams;


/**
 * Class RegexreplaceMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class RegexReplaceMutator implements MutatorContract
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
        [$pattern, $replacement] = $params = DynamicParams::flatVariadicParams($params);

        return preg_replace($pattern, $replacement, $data);
    }
}