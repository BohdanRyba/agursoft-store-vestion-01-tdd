<?php
declare(strict_types=1);

namespace App\SliderModule\Http\Services;

use App\SliderModule\Contracts\Http\Services\SliderServiceInterface;
use App\SliderModule\Models\Slider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SliderService implements SliderServiceInterface
{
    /**
     * @var Slider $slider
     */
    private Slider $slider;

    /**
     * @param Slider $slider
     */
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }

    /**
     * @return Builder[]|Collection
     */
    public function getSliders(): Collection|array
    {
        return $this->slider->query()->get();
    }

    /**
     * @param int $categoryId
     * @return Model|Collection|Builder|array|null
     */
    public function getCategoryById(int $categoryId): Model|Collection|Builder|array|null
    {
        return $this->slider->query()->findOrFail($categoryId);
    }


    /**
     * @param string $title
     * @return Builder|Model
     */
    public function getSliderByTitle(string $title): Model|Builder
    {
        return $this->slider->query()->where('title', $title)->firstOrFail();
    }

    /**
     * @param string $title
     * @return Model|Collection|array|null
     */
    public function findSlider(string $title): Model|Collection|array|null
    {
        return $this->slider->query()->whereTitleLike('%' . $title . '%');
    }
}
