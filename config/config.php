<?php

return [
    /**
     * database or cache
     */
    'driver' => env('KOLAY_AUTH_DRIVER', 'cache'),
    /**
     * Minutes
     */
    'ttl' => env('KOLAY_AUTH_TTL', 1440),
    /**
     * Do not change
     */
    'providers' => [
        'cache' => KolayIK\Auth\Providers\Storage\Illuminate::class
    ]
];