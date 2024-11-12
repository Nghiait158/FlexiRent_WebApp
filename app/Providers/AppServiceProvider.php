<?php

namespace App\Providers;
use App\Models\Property;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $tomorrow = Carbon::tomorrow();

        Property::where('available', '<', Carbon::tomorrow())
            ->update(['available' => $tomorrow]);
    }
}
