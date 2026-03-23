<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {
        $items = BlogCategory::query()
            ->when($request->name, fn($q) => $q->where('name', 'like', "%{$request->name}%"))
            ->when($request->status !== null && $request->status !== '', fn($q) => $q->where('is_active', $request->status))
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(15);

        return view('admin.blog-categories.index', compact('items'));
    }

    public function create()
    {
        return view('admin.blog-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100',
            'slug'        => 'nullable|string|max:120|unique:blog_categories,slug',
            'description' => 'nullable|string',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->all();
        $data['slug'] = $request->slug ?: Str::slug($request->name);

        BlogCategory::create($data);

        return redirect('/admin/blog-categories')->with('success', 'Category created successfully');
    }

    public function edit(BlogCategory $blogCategory)
    {
        $item = $blogCategory;
        return view('admin.blog-categories.edit', compact('item'));
    }

    public function update(Request $request, BlogCategory $blogCategory)
    {
        $request->validate([
            'name'        => 'required|string|max:100',
            'slug'        => 'nullable|string|max:120|unique:blog_categories,slug,' . $blogCategory->id,
            'description' => 'nullable|string',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->all();
        $data['slug'] = $request->slug ?: Str::slug($request->name);

        $blogCategory->update($data);

        return redirect('/admin/blog-categories')->with('success', 'Category updated successfully');
    }

    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        return redirect('/admin/blog-categories')->with('success', 'Category deleted successfully');
    }
}
