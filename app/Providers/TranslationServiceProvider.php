<?php

namespace App\Providers;

use App\Contracts\TranslationDriver;
use App\Services\Translation\GoogleFreeDriver;
use App\Services\Translation\NullDriver;
use App\Services\Translation\TranslationService;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(TranslationDriver::class, function () {
            $driverName = config('translation.driver', 'google');

            return match ($driverName) {
                'google' => new GoogleFreeDriver(),
                default => new NullDriver(),
            };
        });

        $this->app->singleton(TranslationService::class, function ($app) {
            return new TranslationService(
                $app->make(TranslationDriver::class)
            );
        });
    }

    public function boot(): void
    {
        //
    }
}
