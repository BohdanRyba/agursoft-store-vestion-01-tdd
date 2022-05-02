<?php

namespace App\Providers;

use App\Billing\FakePaymentGateway;
use App\Billing\PaymentGateway;
use App\CategoryModule\Contracts\Http\Services\CategoryServiceInterface;
use App\CategoryModule\Http\Services\CategoryService;
use App\SliderModule\Contracts\Http\Services\SliderServiceInterface;
use App\SliderModule\Http\Services\SliderService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->instance(PaymentGateway::class, FakePaymentGateway::class);
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(SliderServiceInterface::class, SliderService::class);
    }
}
