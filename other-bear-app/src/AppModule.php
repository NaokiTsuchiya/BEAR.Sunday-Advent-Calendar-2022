<?php
declare(strict_types=1);

namespace NaokiTsuchiya\OtherApp;

use BEAR\Resource\Module\ResourceModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{

    protected function configure()
    {
        $this->install(new ResourceModule(__NAMESPACE__));
    }
}
