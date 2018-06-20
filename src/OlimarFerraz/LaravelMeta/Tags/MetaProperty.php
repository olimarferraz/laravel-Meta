<?php

namespace OlimarFerraz\LaravelMeta\Tags;

class MetaProperty extends TagAbstract
{
    /**
     * @var array
     */
    protected static $custom = ['app_id'];
    /**
     * @var array
     */
    protected static $available = [
        'title',
        'type',
        'image',
        'url',
        'audio',
        'description',
        'determiner',
        'locale',
        'site_name',
        'video',
    ];

    /**
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    public static function tagDefault(string $key, string $value): string
    {
        if (in_array($key, self::$available, TRUE)) {
            return '<meta property="og:' . $key . '" content="' . $value . '" />';
        }

        return '';
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    public static function tagAppId(string $key, string $value): string
    {
        if (in_array($key, self::$available, TRUE)) {
            return '<meta property="fb:' . $key . '" content="' . $value . '" />';
        }

        return '';
    }
}
