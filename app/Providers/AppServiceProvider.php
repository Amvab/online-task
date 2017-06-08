<?php

namespace App\Providers;

use App\Repositories\TaskInterface;
use App\Repositories\TaskRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->taskRegister();
    }

    public function taskRegister()
    {
        $this->app->bind(TaskInterface::class, TaskRepository::class);
    }
}
