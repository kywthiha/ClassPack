<?php

namespace App\Providers;

use App\Interfaces\PackRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\PackRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        $this->app->bind(PackRepositoryInterface::class, PackRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
