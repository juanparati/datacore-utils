<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;


/**
 * Class RegexreplaceMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class RegexreplaceMutator implements MutatorContract
{

    /**
     * Mutate data.
     *
     * @param $data
     * @return mixed
     */
    public function __invoke($data, $settings = null)
    {
        return preg_replace($settings['pattern'], $settings['replacement'], $data);
    }
}