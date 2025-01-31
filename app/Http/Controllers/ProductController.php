<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Response;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('category');
    
        $categories = Category::all();
        $products = Product::with('category')
            ->when($categoryId, fn($query) => $query->where('category_id', $categoryId))
            ->get();
    
        $selectedCategory = $categoryId ? Category::find($categoryId) : null;
    
        return inertia('Product/index', compact('categories', 'products', 'selectedCategory'));
        }
}
