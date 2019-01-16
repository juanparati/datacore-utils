<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Exceptions\MutatorException;


/**
 * Class RoundMutator.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class RoundMutator extends FloatMutator implements MutatorContract
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
        $mode = PHP_ROUND_HALF_UP;

        if (!empty($settings['mode']))
        {
            switch ($settings['mode'])
            {
                case 'half_up':
                    $mode = PHP_ROUND_HALF_UP;
                    break;

                    case 'half_down':
                    $mode = PHP_ROUND_HALF_DOWN;
                    break;

                    case 'half_even':
                    $mode = PHP_ROUND_HALF_EVEN;
                    break;

                    case 'half_odd':
                    $mode = PHP_ROUND_HALF_ODD;
                    break;
            }
        }

        return round(parent::__invoke($data), $settings['precision'], $mode);
    }
}