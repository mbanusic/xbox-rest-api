<?php

namespace Neznam\XboxRestApi\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Neznam\XboxRestApi\XboxRestApiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Neznam\\XboxRestApi\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            XboxRestApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_xbox-rest-api_table.php.stub';
        $migration->up();
        */
    }
}
