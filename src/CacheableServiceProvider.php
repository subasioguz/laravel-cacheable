<?php

namespace Fowitech\Cacheable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fowitech\Cacheable\Commands\CacheableCommand;

class CacheableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-cacheable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_cacheable_table')
            ->hasCommand(CacheableCommand::class);
    }
}
