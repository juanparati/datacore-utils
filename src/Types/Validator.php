<?php

namespace Juanparati\DatacoreUtils\Types;


use Juanparati\DatacoreUtils\Contracts\ValidatorContract;


/**
 * Class Mutator.
 *
 * Invokes a mutator using a factory method.
 *
 * @package Juanparati\DatacoreUtils\Types
 */
class Validator
{

    /**
     * Caster instance cache.
     *
     * @var ValidatorContract[]
     */
    protected static $cache;


    /**
     * Caster invoker.
     *
     * @param string|ValidatorContract $type
     * @param $value
     * @return mixed
     */
    public static function validate($type, $value, $settings = null)
    {
        if ($type instanceof ValidatorContract)
            $validator = $type;
        else
        {
            $validator = static::$cache[$type] ?? __NAMESPACE__ . '\\Validators\\' . ucfirst($type) . 'Validator';
            $validator = new $validator;
        }

        return $validator($value, $settings);
    }

}