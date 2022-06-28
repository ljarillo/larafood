<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{CategoryRepository, TenantRepository};
use App\Repositories\Contracts\{CategoryRepositoryInterface, TenantRepositoryInterface};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TenantRepositoryInterface::class,TenantRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,CategoryRepository::class
        );
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
