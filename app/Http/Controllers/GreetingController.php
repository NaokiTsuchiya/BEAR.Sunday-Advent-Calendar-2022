<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use BEAR\Resource\ResourceInterface;
use Illuminate\Http\Response;
use Ray\RayDiForLaravel\Attribute\Injectable;

#[Injectable]
class GreetingController extends Controller
{
    public function __construct(private readonly ResourceInterface $resource)
    {
    }

    public function __invoke(): Response
    {
        $ro = $this->resource->get('page://self/greeting');

        return new Response((string) $ro, $ro->code, $ro->headers);
    }
}
