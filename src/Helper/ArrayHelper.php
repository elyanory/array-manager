<?php

namespace Elyanor\ArrayManager\Helper;

/**
 * Class ArrayHelper
 * @package Elyanor\ArrayManager\Helper
 */
class ArrayHelper implements HelperInterface
{
    /**
     * @param array $array
     *
     * @return mixed
     */
    public static function first(array $array = [])
    {
        return array_shift($array);
    }

    /**
     * @param array $array
     *
     * @return mixed
     */
    public static function firstKey(array $array = [])
    {
        $keys = array_keys($array);

        return self::first($keys);
    }

    /**
     * @param array $array
     *
     * @return mixed
     */
    public static function last(array $array = [])
    {
        return array_pop($array);
    }

    /**
     * @param array $array
     *
     * @return mixed
     */
    public static function lastKey(array $array = [])
    {
        $keys = array_keys($array);

        return self::last($keys);
    }
}
