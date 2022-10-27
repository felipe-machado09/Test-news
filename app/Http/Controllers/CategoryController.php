<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category([
            'name' => $request->get('name'),
            'text_color' => $request->get('text_color'),
            'background_color' => $request->get('background_color'),
        ]);
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category saved!');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->text_color = $request->get('text_color');
        $category->background_color = $request->get('background_color');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories')->with('success', 'Category deleted!');
    }
}
