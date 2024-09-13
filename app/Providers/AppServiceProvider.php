<?php

namespace App\Providers;

use App\Services\CategoryService;
use App\Services\Contracts\ContractCategory;
use App\Services\Contracts\Upload;
use App\Services\UploadService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Upload::class, UploadService::class);
        $this->app->bind(ContractCategory::class, CategoryService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Paginator::useBootstrapFive();
//        Paginator::defaultView('vendor.pagination.default');
        Paginator::defaultView('vendor.pagination.custom');
    }
}
