<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showLatestPosts()
{
    $categories = Category::all();

    return view('categories.latest', ['categories' => $categories]);
}

    public function showPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;

        return view('categories.posts', ['category' => $category, 'posts' => $posts]);
    }
}
