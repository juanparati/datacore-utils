<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Exceptions\MutatorException;


/**
 * Class FloatMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class FloatMutator implements MutatorContract
{

    const ONLY_NUMBERS_REGEX = '/([\d.]+)/';

    /**
     * Mutate data.
     *
     * @param $data
     * @return mixed
     * @throws MutatorException
     */
    public function __invoke($data, $settings = null)
    {
        if (!preg_match(static::ONLY_NUMBERS_REGEX, $data, $matches))
            throw new MutatorException('Unable to find numeric expression', 3);

        return (float) $matches[0];
    }
}