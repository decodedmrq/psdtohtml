<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */

    'driver' => 'gd',
    'news' => [
        'path' => 'news' . DIRECTORY_SEPARATOR,
        'thumbnail' => [
            [
                'width' => \App\Models\News::SMALL_THUMBNAIL_WIDTH,
                'height' => \App\Models\News::SMALL_THUMBNAIL_HEIGHT,
            ],
            [
                'width' => \App\Models\News::MEDIUM_THUMBNAIL_WIDTH,
                'height' => \App\Models\News::MEDIUM_THUMBNAIL_HEIGHT,
            ],
        ],
    ],
];
