<?php

namespace App;

use Illuminate\Support\Facades\Cache;

class RussianCache
{
    public static $keys = [];

    public static function start($model)
    {
        static::$keys[] = $key = $model->getCacheKey();

        ob_start();

        return Cache::has($key);
    }

    public static function end()
    {
        $key = array_pop(static::$keys);

        $html = ob_get_clean();

        return Cache::rememberForever($key, function () use ($html) {
            return $html;
        });
    }
}
