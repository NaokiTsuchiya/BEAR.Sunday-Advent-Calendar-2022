<?php

declare(strict_types=1);

namespace NaokiTsuchiya\MyApp;

use BEAR\Resource\Module\ResourceModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /** @inheritDoc */
    protected function configure()
    {
        $this->install(new ResourceModule(__NAMESPACE__));
    }
}
