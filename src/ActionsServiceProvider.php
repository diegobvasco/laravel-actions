<?php

declare(strict_types=1);

namespace DiegoVasconcelos\Actions;

use DiegoVasconcelos\Actions\Commands\MakeActionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ActionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-actions')
            ->hasConfigFile('actions')
            ->hasCommand(MakeActionCommand::class);
    }

    public function packageBooted(): void
    {
        $this->publishes([
            __DIR__.'/Commands/stubs/action.stub' => base_path('stubs/action.stub'),
        ], 'actions-stubs');
    }
}
