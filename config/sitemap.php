<?php

/* Simple configuration file for Laravel Sitemap package */
/* https://github.com/RoumenDamianoff/laravel-sitemap */
return [
    'use_cache'      => false,
    'cache_key'      => 'Laravel.Sitemap.' . config('app.url'),
    'cache_duration' => 3600,
    'escaping'       => true,
];