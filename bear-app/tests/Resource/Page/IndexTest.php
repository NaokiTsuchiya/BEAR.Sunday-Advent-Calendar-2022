<?php

declare(strict_types=1);

namespace NaokiTsuchiya\MyApp\Resource\Page;

use BEAR\Resource\ResourceInterface;
use NaokiTsuchiya\MyApp\AppModule;
use PHPUnit\Framework\TestCase;
use Ray\Di\Injector;

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
