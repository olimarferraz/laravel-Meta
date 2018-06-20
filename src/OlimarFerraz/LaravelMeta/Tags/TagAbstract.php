<?php

namespace OlimarFerraz\LaravelMeta\Tags;

abstract class TagAbstract implements TagInterface
{
    /**
     * @var array
     */
    protected static $custom = [];

    /**
     * @param string $key
     * @param string $value
     *
     * @return mixed
     */
    public static function tag($key, $value)
    {
        if (in_array($key, static::$custom, TRUE)) {
            $method = 'tag' . self::studly($key);
        } else {
            $method = 'tagDefault';
        }

        return static::$method($key, $value);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    private static function studly(string $string): string
    {
        return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string)));
    }
}
