<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    private function requireAdmin()
    {
        if (!session()->has('admin_logged')) {
            return redirect()->route('admin.login');
        }
        return null;
    }

    public function list()
    {
        if ($r = $this->requireAdmin()) return $r;

        $categories = Category::orderBy('title')->get();
        return view('admin.list_category', compact('categories'));
    }


    public function store(Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;

        $request->validate([
            'category' => 'required|alpha_dash|unique:categories,category',
            'title' => 'required|string'
        ]);

        Category::create($request->only('category', 'title'));

        return redirect()->route('admin.categories')->with('success', 'Dodano kategorię');
    }

    public function destroy($id)
    {
        if ($r = $this->requireAdmin()) return $r;

        Category::destroy($id);
        return redirect()->route('admin.categories')->with('success', 'Kategoria została usunięta');
    }

}
