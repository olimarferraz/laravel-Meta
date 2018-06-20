<?php

namespace OlimarFerraz\LaravelMeta\Tags;

class Tag extends TagAbstract
{
    /**
     * @var array
     */
    protected static $custom = ['image'];
    /**
     * @var array
     */
    protected static $available = ['title'];

    /**
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    public static function tagDefault(string $key, string $value): string
    {
        if (in_array($key, self::$available, TRUE)) {
            return '<' . $key . '>' . $value . '</' . $key . '>';
        }

        return '';
    }

    /**
     * @param $key
     * @param $value
     *
     * @return string
     */
    public static function tagImage(string $key, string $value): string
    {
        return '<link rel="image_src" href="' . $value . '" />';
    }
}
