<?php
declare(strict_types=1);

namespace App\CategoryModule\Contracts\Http\Services;

interface CategoryServiceInterface
{
    public function getCategories();

    public function getAllCategories();

    public function getCategoryById(int $categoryId);

    public function getCategoriesListById(array $categoryIds);

    public function getDefaultCategories();
}
