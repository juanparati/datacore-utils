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
            return is_array($variadic[0]) ? array_values($variadic[0]) : $variadic[0];

        return $variadic;
    }

}