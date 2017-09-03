<?php

namespace Messerli90\Bittrex;

use Illuminate\Support\ServiceProvider;

class BittrexServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('bittrex', function () {
            return new Bittrex(
                config('services.bittrex.key'),
                config('services.bittrex.secret')
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Bittrex::class];
    }
}
