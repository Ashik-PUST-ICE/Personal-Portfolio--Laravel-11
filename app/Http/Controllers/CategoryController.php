<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.dashboard', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255'
        ]);

        Category::create([
            'category_name' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.edit_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category_name' => $request->category,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}
