<?php

namespace Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
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
