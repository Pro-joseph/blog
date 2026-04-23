<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Categories $category)
    {
        $articles = $category->articles()->latest()->get();
        return view('categories.show', compact('category', 'articles'));
    }
}
