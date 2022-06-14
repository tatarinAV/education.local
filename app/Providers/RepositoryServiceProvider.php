<?php

namespace App\Providers;

use App\Repositories\EducationalMaterialRepository;
use App\Repositories\Interfaces\EducationalMaterialInterface;
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
        $this->app->bind(
            EducationalMaterialInterface::class,
            EducationalMaterialRepository::class
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
