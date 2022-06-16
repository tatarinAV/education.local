<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\EducationalMaterialRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\EducationalMaterialRepositoryInterface;
use App\Services\CategoryService;
use App\Services\EducationalMaterialService;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\EducationalMaterialServiceInterface;
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
        $this->app->bind(
            CategoryServiceInterface::class,
            CategoryService::class
        );
        $this->app->bind(
            EducationalMaterialServiceInterface::class,
            EducationalMaterialService::class
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
