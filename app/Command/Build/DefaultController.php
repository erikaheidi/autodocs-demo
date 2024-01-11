<?php

declare(strict_types=1);

namespace App\Command\Build;

use Autodocs\Service\AutodocsService;
use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle(): void
    {
        /** @var AutodocsService $autodocs */
        $autodocs = $this->getApp()->autodocs;

        $this->info("Starting Build...");
        $autodocs->buildPages($this->getParam('pages') ?? "all");
        $this->info("Build finished. Output saved to " . $autodocs->config['output']);

    }
}
