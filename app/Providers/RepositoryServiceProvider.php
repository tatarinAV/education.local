<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\EducationalMaterialRepository;
use App\Repositories\Interfaces\CategoryInterface;
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
        $this->app->bind(
            CategoryInterface::class,
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
