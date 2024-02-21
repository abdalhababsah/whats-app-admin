<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\DataTables\Catalog\ProductsDataTable;
class ProductsController extends Controller
{
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('pages.catalog.products.list');
    }

    public function create()
    {
        return view('pages.catalog.products.create');
    }

    public function edit(Product $product)
    {
        return view('pages.catalog.products.edit', compact('product'));
    }
}
