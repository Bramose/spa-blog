<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts = ($category->posts->count()>1) ? $category->posts()->with('category')->paginate(1) : $category->posts->load('category');
        return $posts;
    }
}
