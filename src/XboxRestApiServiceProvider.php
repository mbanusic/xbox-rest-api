<?php

namespace Neznam\XboxRestApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Neznam\XboxRestApi\Commands\XboxRestApiCommand;

class XboxRestApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('xbox-rest-api')
            ->hasConfigFile()
            ->hasCommand(XboxRestApiCommand::class);
    }
}
