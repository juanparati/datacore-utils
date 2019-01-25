<?php

namespace Juanparati\DatacoreUtils\Helpers;


class DynamicParams
{

    /**
     * Flat variadic parameters.
     *
     * @param null $variadic
     * @return array|null
     */
    public static function flatVariadicParams($variadic = null)
    {
        if ($variadic === null)
            return null;

        if (is_array($variadic))
            return array_values($variadic[0]);

        return $variadic;
    }

}