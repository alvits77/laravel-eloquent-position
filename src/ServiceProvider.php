<?php

namespace Alvits\Support\Eloquent\Position;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Alvits\Support\Eloquent\Position\Commands\RecalculatePositionCommand;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RecalculatePositionCommand::class
            ]);
        }
    }
}