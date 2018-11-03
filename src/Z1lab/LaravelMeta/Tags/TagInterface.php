<?php

namespace Z1lab\LaravelMeta\Tags;

interface TagInterface
{
    public static function tagDefault(string $key, string $value): string;
}
