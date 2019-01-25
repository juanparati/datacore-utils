<?php

namespace Juanparati\DatacoreUtils\Types;


use Juanparati\DatacoreUtils\Contracts\MutatorContract;


/**
 * Class Mutator.
 *
 * Invokes a mutator using a factory method.
 *
 * @package Juanparati\DatacoreUtils\Types
 */
class Mutator
{

    /**
     * Caster instance cache.
     *
     * @var MutatorContract[]
     */
    protected static $cache;


    /**
     * Caster invoker.
     *
     * @param string|MutatorContract $type
     * @param $value
     * @param array $params
     * @return mixed
     */
    public static function mutate($type, $value, ...$params)
    {
        if ($type instanceof MutatorContract)
            $mutator = $type;
        else
        {
            $mutator = static::$cache[$type] ?? __NAMESPACE__ . '\\Mutators\\' . ucfirst($type) . 'Mutator';
            $mutator = new $mutator;
        }

        return $mutator($value, $params);
    }

}