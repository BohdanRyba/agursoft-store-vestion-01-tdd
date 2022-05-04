<?php

namespace App\Http\Controllers;

use App\Billing\LiqPay\Contracts\LiqpayPaymentInterface;
use App\Billing\LiqPay\Contracts\LiqpayServiceInterface;
use App\CategoryModule\Contracts\Http\Services\CategoryServiceInterface;
use App\SliderModule\Contracts\Http\Services\SliderServiceInterface;

class HomeController extends Controller
{
    /**
     * @var SliderServiceInterface $sliderService
     */
    private SliderServiceInterface $sliderService;

    /**
     * @var CategoryServiceInterface $categoryService
     */
    private CategoryServiceInterface $categoryService;
    private LiqpayServiceInterface $liqpayService;


    /**
     * Create a new controller instance.
     *
     * @param CategoryServiceInterface $categoryService
     * @param SliderServiceInterface $sliderService
     */
    public function __construct(
        CategoryServiceInterface $categoryService,
        SliderServiceInterface $sliderService,
        LiqpayServiceInterface $liqpayService
    ) {
        $this->categoryService = $categoryService;
        $this->sliderService = $sliderService;
        $this->liqpayService = $liqpayService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paymentForm = $this->liqpayService->getForm(1000);
        $categories = $this->categoryService->getCategories();
        $slider = $this->sliderService->getSliderByTitle('homepage');
        return view('suha.home', compact('categories', 'slider', 'paymentForm'));
    }
}
