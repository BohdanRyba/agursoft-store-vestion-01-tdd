<?php

namespace Tests\Unit;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function test_can_create_category()
    {
        // Arrange

        $categoryParent = Category::factory()->active()->create();
        $categoryChild = Category::factory()->active()->parent($categoryParent->id)->create();

        // Act

        $categories = Category::query()->get();

        // Assert

        $this->assertTrue($categories->contains($categoryParent));
        $this->assertTrue($categories->contains($categoryChild));
    }

    /** @test */
    public function test_category_can_be_showing()
    {
        // Arrange
        $activeCategory1 = Category::factory()->active()->create();
        $activeCategory2 = Category::factory()->active()->create();
        $disabledCategory = Category::factory()->unactive()->create();

        // Act
        $categories = Category::query()->published()->get();

        // Assert
        $this->assertTrue($categories->contains($activeCategory1));
        $this->assertTrue($categories->contains($activeCategory2));
        $this->assertFalse($categories->contains($disabledCategory));
    }
}
