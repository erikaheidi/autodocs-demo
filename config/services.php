<?php

declare(strict_types=1);

use Autodocs\Service\AutodocsService;

return [
    /****************************************************************************
     * Application Services
     * --------------------------------------------------------------------------
     *
     * The services to be loaded for your application.
     *****************************************************************************/

    'services' => [
        'autodocs' => AutodocsService::class,
    ],
];
