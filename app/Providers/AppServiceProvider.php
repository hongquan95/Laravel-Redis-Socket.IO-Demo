<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mail;
use App\Sms;
use App\Notify;
use App\SmsOnly;
use App\MailOnly;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('Notify', function(){
        //     return new Mail();
        // });
        // $this->app->singleton('App\Notify', 'App\Mail');
        $this->app->singleton('App\Notify', function() {
            return new SmsOnly(new Mail(), resolve('SmsAdapter')); //send mail and sms
        });

        $this->app->singleton('MailAdapter', function(){
            return new Mail();
        });

        $this->app->singleton('SmsAdapter', function(){
            return new Sms();
        });

    }
}
