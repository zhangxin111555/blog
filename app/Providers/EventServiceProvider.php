<?php
/*
 * @Description: 
 * @Autor: yeyunyang
 * @Date: 2019-12-27 10:59:01
 * @LastEditTime : 2020-01-02 14:47:26
 */

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    //     'Illuminate\Database\Events\QueryExecuted' => [
    //         'App\Listeners\QueryListener',
    // ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
