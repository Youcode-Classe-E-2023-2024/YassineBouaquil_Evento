<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $black_hover = 'Manage Categories';
        $categories = Category::All();



        $data = compact('categories', 'black_hover');
        return view('manageCategories')->with($data);
    }
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name', // Unique validation rule ensures no duplicate category names
        ]);

        // Create new category
        Category::create([
            'name' => $request->name,
        ]);

        // Redirect back with success message or do any additional logic as needed
        return redirect()->back()->with('success', 'Category has been added.');
    }
    public function destroy(Request $request)
    {
        // Validate request
        $request->validate([
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id', // Ensure all selected category IDs exist
        ]);

        // Delete selected categories
        Category::whereIn('id', $request->input('category_ids'))->delete();

        // Redirect back with success message or do any additional logic as needed
        return redirect()->back()->with('success', 'Selected categories have been deleted.');
    }


}
