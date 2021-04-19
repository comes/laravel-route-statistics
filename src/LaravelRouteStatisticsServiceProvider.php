<?php

namespace Bilfeldt\LaravelRouteStatistics;

use Bilfeldt\LaravelRouteStatistics\Commands\LaravelRouteStatisticsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRouteStatisticsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel_route_statistics')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_route_statistics_table')
            ->hasCommand(LaravelRouteStatisticsCommand::class);
    }
}
