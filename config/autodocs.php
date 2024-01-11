<?php

declare(strict_types=1);

use App\ReadmePage;

return [
    'autodocs' => [
        // Pages to Build
        'pages' => [
            ReadmePage::class
        ],
        // Build Output Folder
        'output' => envconfig('AUTODOCS_OUTPUT', __DIR__.'/../storage/content'),
        // Cache Folder - where to look for cache json files
        'cache_dir' => envconfig('AUTODOCS_CACHE', __DIR__.'/../storage/cache'),
        // Templates directory
        'templates_dir' => envconfig('AUTODOCS_TEMPLATES', __DIR__.'/../storage/templates')
    ]
];
