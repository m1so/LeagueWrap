<?php

namespace LeagueWrap\Traits;

/**
 * Class ArrayAccessible
 *
 * @see https://medium.com/@assertchris/dot-notation-3fd3e42edc61
 */
trait ArrayAccessible
{
    /**
     * @param array $array
     * @param string $key
     *
     * @return bool
     */
    protected function exists(array $array, $key)
    {
        if (isset($array[$key])) {
            return true;
        }

        foreach (explode(".", $key) as $part) {
            if (!is_array($array) or !isset($array[$part])) {
                return false;
            }

            $array = $array[$part];
        }

        return true;
    }

    /**
     * @param array $array
     * @param string $key
     *
     * @return null
     */
    protected function get(array $array, $key)
    {
        if (isset($array[$key])) {
            return $array[$key];
        }

        foreach (explode(".", $key) as $part) {
            if (!is_array($array) or !isset($array[$part])) {
                return null;
            }

            $array = $array[$part];
        }

        return $array;
    }

    /**
     * @param array $array
     * @param string $key
     * @param mixed $value
     */
    protected function set(array &$array, $key, $value)
    {
        $parts = explode(".", $key);

        while (count($parts) > 1) {
            $part = array_shift($parts);

            if (!isset($array[$part]) or !is_array($array[$part])) {
                $array[$part] = [];
            }

            $array =& $array[$part];
        }

        $array[array_shift($parts)] = $value;
    }

    /**
     * @param array $array
     * @param string $key
     */
    protected function unset_(array &$array, $key)
    {
        $parts = explode(".", $key);

        while (count($parts) > 1) {
            $part = array_shift($parts);

            if (isset($array[$part]) and is_array($array[$part])) {
                $array =& $array[$part];
            }
        }

        unset($array[array_shift($parts)]);
    }
}
