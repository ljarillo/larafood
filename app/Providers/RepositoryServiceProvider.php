<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{
    TenantRepository
};
use App\Repositories\Contracts\{
    TenantRepositoryInterface
};

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
