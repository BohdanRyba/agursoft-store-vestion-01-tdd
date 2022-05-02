<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class CategoriesTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_published_categories()
    {
        // Arrange
        $activeCategories = Category::factory(5)->active()->create()->toArray();
        $unactiveCategories = collect(Category::factory(5)->unactive()->create()->toArray());

        // Act
        $response = $this->json('GET', '/api/categories');


        // Assert
        $response->assertStatus(200);
        $response->assertJsonCount(5);

//        $responseData = collect(json_decode($response->content(), true));
        $response->assertJson(fn (AssertableJson $json) => $json->where('0.is_active', 1));
        $response->assertJson(fn (AssertableJson $json) => $json->where('1.is_active', 1));
        $response->assertJson(fn (AssertableJson $json) => $json->where('2.is_active', 1));
        $response->assertJson(fn (AssertableJson $json) => $json->where('3.is_active', 1));
        $response->assertJson(fn (AssertableJson $json) => $json->where('4.is_active', 1));
//        $this->assertEquals($responseData, $activeCategories);
//        $this->assertNotEquals($responseData, $unactiveCategories);
    }
}
