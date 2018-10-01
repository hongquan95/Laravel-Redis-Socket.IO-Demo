<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mail;
use App\Sms;
use App\Notify;
use App\MailAdapter;
use App\SmsAdapter;

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
        $this->app->singleton('App\Notify', function() {
            return new SmsAdapter(); //send mail and sms
        });

        $this->app->singleton('MailAdd', function(){
            return new Mail();
        });

        $this->app->singleton('SmsAdd', function(){
            return new Sms();
        });

    }
}
