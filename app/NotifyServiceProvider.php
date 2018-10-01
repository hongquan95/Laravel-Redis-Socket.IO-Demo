<?php
namespace App;
use Illuminate\Support\ServiceProvider;
use \App\Mail;
use \App\Notify;

class NotifyServiceProvider extends ServiceProvider
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

    public function register()
    {
        $this->app->bind('Notify', function () {
            return new \App\Mail();
        });
    }
}
