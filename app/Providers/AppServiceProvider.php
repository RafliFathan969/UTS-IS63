<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Layout SB Admin 2 memakai Bootstrap 4,
        // jadi pagination Laravel diarahkan memakai style Bootstrap.
        Paginator::useBootstrapFour();
    }
}
