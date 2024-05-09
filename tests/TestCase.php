<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

//        Factory::guessModelNamesUsing(function (Factory $factoryName) {
//            $modelName = str_replace('Factory', '', class_basename($factoryName));
//
//            return "Domains\\{$modelName}\\Models\\{$modelName}";
//        });
    }
}
