<?php

namespace Juanparati\DatacoreUtils\Types;


use Juanparati\DatacoreUtils\Contracts\MutatorContract;
use Juanparati\DatacoreUtils\Helpers\StringManipulation;


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
            $type = StringManipulation::snakeToCamel($type);

            $mutator = static::$cache[$type] ?? __NAMESPACE__ . '\\Mutators\\' . ucfirst($type) . 'Mutator';
            $mutator = new $mutator;
        }

        return $mutator($value, isset($params[0]) && is_array($params[0]) ? $params[0] : $params);
    }

}