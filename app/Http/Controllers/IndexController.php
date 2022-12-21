<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use BEAR\Resource\ResourceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ray\RayDiForLaravel\Attribute\Injectable;

#[Injectable]
class IndexController extends Controller
{
    public function __construct(private readonly ResourceInterface $resource)
    {
    }

    public function __invoke(Request $request): Response
    {
        $name = $request->get('name', 'World');
        $ro = $this->resource->get('page://self/index', ['name' => $name]);

        return new Response((string) $ro, $ro->code, $ro->headers);
    }
}
