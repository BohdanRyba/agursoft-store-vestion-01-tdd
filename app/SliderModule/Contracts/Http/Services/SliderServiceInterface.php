<?php
declare(strict_types=1);

namespace App\SliderModule\Contracts\Http\Services;

interface SliderServiceInterface
{
    public function getSliders();

    public function getCategoryById(int $categoryId);

    public function getSliderByTitle(string $title);

    public function findSlider(string $title);
}
