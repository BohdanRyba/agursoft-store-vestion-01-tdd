<?php

namespace App\Http\Controllers;

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


    /**
     * Create a new controller instance.
     *
     * @param CategoryServiceInterface $categoryService
     * @param SliderServiceInterface $sliderService
     */
    public function __construct(
        CategoryServiceInterface $categoryService,
        SliderServiceInterface $sliderService
    ) {
        $this->categoryService = $categoryService;
        $this->sliderService = $sliderService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = $this->categoryService->getCategories();
        $slider = $this->sliderService->getSliderByTitle('homepage');
        return view('suha.home', compact('categories', 'slider'));
    }
}
