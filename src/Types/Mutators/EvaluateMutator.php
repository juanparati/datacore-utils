<?php

namespace Juanparati\DatacoreUtils\Types\Mutators;

use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Exceptions\MutatorException;


/**
 * Class EvalMutator.
 *
 * Evaluate a mathematical expression.
 *
 * @package Juanparati\DatacoreUtils\Types\Mutators
 */
class EvaluateMutator implements MutatorContract
{

    /**
     * Regular expression used for check mathematical expressions.
     */
    const MATH_EXPRESSION_REGEX = '/^([\d+\-*\^\%\.\/\(\) ]+)$/';


    /**
     * Mutate data.
     *
     * @param $data
     * @return mixed
     * @throws MutatorException
     */
    public function __invoke($data, $settings = null)
    {
        if (!preg_match(static::MATH_EXPRESSION_REGEX, $data))
            throw new MutatorException('Unable to compute the following expression: ' . $data, 0);

        // Convert generic "pow" operator to php "pow" operator.
        $data = str_replace('^', '**', $data);

        try
        {
            $result = eval('return '. $data .';');
        }
        catch (\Exception $e)
        {
            throw new MutatorException('Unable to evaluate expression: ' .  $data, 1);
        }

        return $result;
    }
}