<?php

namespace App\Providers;

use App\Billing\FakePaymentGateway;
use App\Billing\LiqPay\Contracts\LiqpayPaymentInterface;
use App\Billing\LiqPay\Contracts\LiqpayServiceInterface;
use App\Billing\LiqPay\Http\Services\LiqpayService;
use App\Billing\LiqPay\V2\LiqPay;
use App\Billing\PaymentGateway;
use App\CategoryModule\Contracts\Http\Services\CategoryServiceInterface;
use App\CategoryModule\Http\Services\CategoryService;
use App\SliderModule\Contracts\Http\Services\SliderServiceInterface;
use App\SliderModule\Http\Services\SliderService;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Support\Facades\DB;
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
        if (DB::connection() instanceof SQLiteConnection) {
            DB::statement(DB::raw('PRAGMA foreign_keys=1'));
        }

        $this->app->instance(PaymentGateway::class, FakePaymentGateway::class);
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(SliderServiceInterface::class, SliderService::class);
        $this->app->bind(LiqpayPaymentInterface::class, LiqPay::class);
        $this->app->bind(LiqpayServiceInterface::class, LiqpayService::class);
    }
}
