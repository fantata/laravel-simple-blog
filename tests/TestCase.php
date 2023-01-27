<?php

namespace Fantata\LaravelSimpleBlog\Tests;

use Fantata\LaravelSimpleBlog\LaravelSimpleBlogServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSimpleBlogServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
