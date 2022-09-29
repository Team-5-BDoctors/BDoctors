<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app) {
            return new Gateway(
                    [
                        'environment' => 'sandbox',
                        'merchantId' => 'tkhvshpg3x42mdwt',
                        'publicKey' => '38k5rzh8prsnjmsg',
                        'privateKey' => '2e3e9c8ccfe20af10f35445cc9df655e'
                    ]
                );
        });
    }
}