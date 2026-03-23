<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $stats = [
            'blogs_total'       => Blog::count(),
            'blogs_active'      => Blog::where('is_active', 1)->count(),
            'blogs_inactive'    => Blog::where('is_active', 0)->count(),
            'blogs_this_month'  => Blog::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count(),
            'categories_total'  => BlogCategory::count(),
            'categories_active' => BlogCategory::where('is_active', 1)->count(),
            'faqs_total'        => Faq::count(),
            'faqs_active'       => Faq::where('is_active', 1)->count(),
        ];

        $date = $request->input('date');

        $recent_blogs = Blog::when($date, fn($q) => $q->whereDate('published_at', $date))
                            ->latest()
                            ->take(8)
                            ->get();

        $today     = \Carbon\Carbon::today();
        $dateStrip = collect(range(0, 9))->map(fn ($d) => $today->copy()->addDays($d));

        return view('admin.dashboard.index', compact('stats', 'recent_blogs', 'date', 'dateStrip'));
    }

    public function recentBlogs(Request $request)
    {
        $date  = $request->input('date');
        $blogs = Blog::when($date, fn($q) => $q->whereDate('published_at', $date))
                     ->latest()->take(8)->get()
                     ->map(fn($b) => [
                         'id'           => $b->id,
                         'title'        => \Str::limit($b->title, 40),
                         'category'     => $b->category,
                         'image_url'    => $b->image_url,
                         'published_at' => $b->published_at?->format('d M Y'),
                         'is_active'    => $b->is_active,
                         'edit_url'     => url('admin/blogs/' . $b->id . '/edit'),
                     ]);

        return response()->json($blogs);
    }

    public function edit()
    {
        $item = Auth::user();
        return view('admin.dashboard.edit', compact('item'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $item = Auth::user();

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        $item->update($data);
        Auth::login($item);

        return back()->with('success', 'تم تحديث البيانات بنجاح');
    }

    public function settings()
    {
        return view('admin.dashboard.settings');
    }

    public function updateSettings(Request $request)
    {
        return redirect()->back()->with('success', 'تم تحديث الإعدادات بنجاح');
    }
}
