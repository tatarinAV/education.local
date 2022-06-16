<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\EducationalMaterialRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\EducationalMaterialRepositoryInterface;
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
            EducationalMaterialRepositoryInterface::class,
            EducationalMaterialRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
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
