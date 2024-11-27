<?php

namespace App\Http\Controllers\Wine;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\View\View;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function __construct(private readonly CategoryRepositoryInterface $repository )
     {

     }
     public function index(): View
     {
        /*ste código se creó para probar la herramienta de buggregator, pero buggreegator no funciona
        $categories = $this->repository->paginate(
            counts: ["wines"],
        );
        ray($categories);
        */
        return view("wine.category.index", [
            "categories" => $this->repository->paginate(
                counts:["wines"],
            )
            ]);
     }

     public function create(): View
     {
        return view("wine.category.create", [
            'category' => $this ->repository->model(),
            'action'=> route('categories.store'),
            'method' => 'POST',
            'submit' =>'Crear',
        ]);
     }
     public function store(CategoryRequest $request): RedirectResponse
     {

        $this->repository->create($request->validated());
        return redirect()->route("categories.index");
     }
}
