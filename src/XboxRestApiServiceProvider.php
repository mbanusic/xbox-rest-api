<?php

namespace Neznam\XboxRestApi;

use Neznam\XboxRestApi\Commands\XboxRestApiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
