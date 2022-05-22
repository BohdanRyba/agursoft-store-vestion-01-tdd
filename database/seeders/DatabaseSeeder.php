<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\CategoryModule\Http\Services\CategoryService;
use App\CategoryModule\Models\Category;
use App\Models\Concert;
use App\Models\Slider;
use App\Models\SliderItem;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{

    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BaseUserSeeder::class,
        ]);

        foreach ($this->categoryService->getDefaultCategories() as $category) {
            Category::factory()->create($category);
        }

        $slider = Slider::factory()->create(['title'=> 'homepage']);

        $slides = SliderItem::factory(3)->create(['slider_id' => $slider->id]);

        Concert::factory(100)->create();
        User::factory(10)->create();
        $user = User::whereEmail('user@user.com')->first();
//        Slider::factory(5)->belongsToUser($user->id)->create();
        $this->call([
            ProductSeeder::class,
        ]);

    }
}
