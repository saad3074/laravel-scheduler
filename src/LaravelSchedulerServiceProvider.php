<?php

namespace tearsilent\LaravelScheduler;

use Illuminate\Support\ServiceProvider;

class LaravelSchedulerServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(VisitStats::class, function () {
            return new VisitStats();
        });

        $this->app->alias(VisitStats::class, 'laravel-visitor-tracker');

        if ($this->app->config->get('visitortracker') === null) {
            $this->app->config->set('visitortracker', require __DIR__ . '/config/visitortracker.php');
        }
        if ($this->app->runningInConsole()) {
            // Registering package commands.
            $this->commands([
                Console\PublishSchedulerCommand::class,
            ]);
        }
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations','');

    }
}
