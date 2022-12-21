<?php

declare(strict_types=1);

namespace App\RayDi;

use Ray\Di\AbstractModule;

final class AppModule extends AbstractModule
{
    protected function configure(): void
    {
        $this->install(new \NaokiTsuchiya\MyApp\AppModule());
    }
}
