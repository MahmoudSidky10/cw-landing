<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $items = Blog::query()
            ->when($request->category, fn($q) => $q->where('category', $request->category))
            ->when($request->title,    fn($q) => $q->where('title', 'like', "%{$request->title}%"))
            ->when($request->status !== null && $request->status !== '', fn($q) => $q->where('is_active', $request->status))
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->paginate(15);

        $categories = Blog::distinct()->whereNotNull('category')->pluck('category');

        return view('admin.blogs.index', compact('items', 'categories'));
    }

    public function create()
    {
        $categories = BlogCategory::where('is_active', 1)->orderBy('sort_order')->orderBy('name')->get();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'tags'     => 'nullable|string',
            'excerpt'  => 'nullable|string',
            'content'  => 'required|string',
            'image'    => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        Blog::create($data);

        return redirect('/admin/blogs')->with('success', 'Blog post created successfully');
    }

    public function edit(int $blog)
    {
        $item = Blog::findOrFail($blog);
        $categories = BlogCategory::where('is_active', 1)->orderBy('sort_order')->orderBy('name')->get();
        return view('admin.blogs.edit', compact('item', 'categories'));
    }

    public function update(Request $request, int $blog)
    {
        $blogModel = Blog::findOrFail($blog);

        $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'tags'     => 'nullable|string',
            'excerpt'  => 'nullable|string',
            'content'  => 'required|string',
            'image'    => 'nullable|image|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blogModel->update($data);

        return redirect('/admin/blogs')->with('success', 'Blog post updated successfully');
    }

    public function destroy(int $blog)
    {
        Blog::findOrFail($blog)->delete();
        return redirect('/admin/blogs')->with('success', 'Blog post deleted successfully');
    }
}
