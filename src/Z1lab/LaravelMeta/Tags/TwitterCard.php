<?php

namespace Z1lab\LaravelMeta\Tags;

class TwitterCard extends TagAbstract
{
    protected static $available = [
        'card',
        'site',
        'site:id',
        'creator',
        'creator:id',
        'description',
        'title',
        'image',
        'image:alt',
        'player',
        'player:width',
        'player:height',
        'player:stream',
        'app:name:iphone',
        'app:id:iphone',
        'app:url:iphone',
        'app:name:ipad',
        'app:id:ipad',
        'app:url:ipad',
        'app:name:googleplay',
        'app:id:googleplay', 
        'app:url:googleplay',
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
            return '<meta name="twitter:' . $key . '" content="' . $value . '" />';
        }

        return '';
    }
}
