<?php

declare(strict_types=1);

namespace NaokiTsuchiya\OtherApp\Resource;

use BEAR\Resource\ResourceInterface;
use NaokiTsuchiya\OtherApp\AppModule;
use Ray\Di\Injector;
use Tests\TestCase;

class IndexTest extends TestCase
{
    private ResourceInterface $resource;

    protected function setUp(): void
    {
        $injector = new Injector(new AppModule());
        $this->resource = $injector->getInstance(ResourceInterface::class);
    }

    public function testGet(): void
    {
        $ro = $this->resource->get('page://self/index', ['name' => 'Test']);

        $this->assertSame(200, $ro->code);
        $this->assertSame('Hello Test', $ro->body['greeting']);
    }
}
