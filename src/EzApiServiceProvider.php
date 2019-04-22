<?php

namespace Sonphfs\Ezapi;

use Illuminate\Support\ServiceProvider;

class EzApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sonphfs\Ezapi\ArticleController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/2019_04_22_033243_create_articles_table.php');
        include __DIR__.'/database/seeds/DatabaseSeeder.php';
        include __DIR__.'/database/seeds/ArticlesTableSeeder.php';
        include __DIR__.'/routes/api.php';
    }
}
