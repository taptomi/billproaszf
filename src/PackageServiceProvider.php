<?php
declare(strict_types=1);

namespace TMInfotech\BillPRODOCS\Providers;

use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views','billprodocs');
    }
}