<?php

declare(strict_types=1);

test('command "help" is correctly loaded', function (): void {
    $app = getApp();
    $app->runCommand(['minicli', 'help']);
})->expectOutputRegex("/help/");
