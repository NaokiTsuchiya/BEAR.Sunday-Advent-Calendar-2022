<?php

declare(strict_types=1);

namespace NaokiTsuchiya\MyApp\Resource\Page;

use BEAR\Resource\ResourceInterface;
use BEAR\Resource\ResourceObject;

class Greeting extends ResourceObject
{
    public function __construct(private readonly ResourceInterface $resource)
    {
    }

    public function onGet(string $name = 'other'): static
    {
        $this->body = $this->resource->get('page://other/', ['name' => $name]);

        return $this;
    }
}
