<?php

namespace App\Repositories\Category;

class EloquentCategoryRepository implements CategoryRepositoryInterface
{
    use CRUDOperations;
    protected string $model = Category::class;
}
