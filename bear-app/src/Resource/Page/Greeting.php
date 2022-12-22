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
        $ro = $this->resource->get('page://other/', ['name' => $name]);
        $this->headers = $ro->headers;
        $this->body = $ro->body;

        return $this;
    }
}
