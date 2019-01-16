<?php

namespace Juanparati\DatacoreUtils\Types;


use Juanparati\DatacoreUtils\Contracts\CasterContract;

/**
 * Class Caster.
 *
 * Invokes a caster using a factory method.
 *
 * @package Juanparati\DatacoreUtils\Types
 */
class Caster
{

    /**
     * Caster instance cache.
     *
     * @var CasterContract[]
     */
    protected static $cache;


    /**
     * Caster invoker.
     *
     * @param string|CasterContract $type
     * @param $value
     * @return mixed
     */
    public static function cast($type, $value)
    {
        if ($type instanceof CasterContract)
            $caster = $type;
        else
        {
            $caster = static::$cache[$type] ?? __NAMESPACE__ . '\\Casters\\' . ucfirst($type) . 'Caster';
            $caster = new $caster;
        }

        return $caster($value);
    }

}