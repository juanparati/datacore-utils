<?php


namespace Juanparati\DatacoreUtils\Helpers;


/**
 * Class StringManipulation.
 *
 * @package Juanparati\DatacoreUtils\Helpers
 */
class StringManipulation
{

    const SNAKE_CHAR = '_';


    /**
     * Convert snake case string into camel case.
     *
     * @param string $string
     * @return mixed
     */
    public static function snakeToCamel(string $string)
    {
        return str_replace(static::SNAKE_CHAR, '', ucwords($string, static::SNAKE_CHAR));
    }

}