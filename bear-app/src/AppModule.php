<?php

declare(strict_types=1);

namespace NaokiTsuchiya\MyApp;

use BEAR\Resource\ImportApp;
use BEAR\Resource\Module\ImportAppModule;
use BEAR\Resource\Module\ResourceModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /** @inheritDoc */
    protected function configure()
    {
        $this->install(
            new ImportAppModule(
                [new ImportApp('other', 'NaokiTsuchiya\OtherApp', '')]
            )
        );
        $this->install(new ResourceModule(__NAMESPACE__));
    }
}
