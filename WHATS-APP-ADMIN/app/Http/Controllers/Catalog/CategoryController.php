<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\DataTables\Catalog\CategoryDataTable;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\CategoryGroup;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('pages.catalog.categories.category.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryGroups = CategoryGroup::all();
        return view('pages.catalog.categories.category.create', compact('categoryGroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            $request->validate($request->rules());

            $category = Category::create($request->all());

            return response()->json(['message' => 'Category Added Successfully', 'status' => 200]);
        } catch (\Exception $e) {
            \Log::error('Error in storing category: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to add category', 'error' => $e->getMessage(), 'status' => 500]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categoryGroups = CategoryGroup::all();
        return view('pages.catalog.categories.category.create', compact('category', 'categoryGroups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $category)
    {
        try {
            $request->validate($request->rules());

            $category->update($request->all());

            return response()->json(['message' => 'Category Updated Successfully', 'status' => 200]);
        } catch (\Exception $e) {
            \Log::error('Error in updating category: ' . $e->getMessage());

            return response()->json(['message' => 'Failed to update category', 'error' => $e->getMessage(), 'status' => 500]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Category::where('id', $id)->delete();
            return response()->json(['message' => 'Category Deleted Successfully', 'status' => 200]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['message' => 'Failed to delete category', 'error' => $e->getMessage(), 'status' => 500]);
        }
    }
}
