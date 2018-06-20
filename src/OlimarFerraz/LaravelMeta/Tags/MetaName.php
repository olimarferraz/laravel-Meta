<?php

namespace OlimarFerraz\LaravelMeta\Tags;

class MetaName extends TagAbstract
{
    /**
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    public static function tagDefault(string $key, string $value): string
    {
        return '<meta name="' . $key . '" content="' . $value . '" />';
    }
}
