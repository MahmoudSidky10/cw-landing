<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::instance();

        return view('web.home.index', compact('settings'));
    }

    public function contact()
    {
        $settings = SiteSetting::instance();
        return view('web.contact', compact('settings'));
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string',
        ]);

        Contact::create($request->only('name', 'email', 'subject', 'message'));

        return back()->with('success', 'Your message has been sent! We will get back to you shortly.');
    }

    public function about()
    {
        $settings = SiteSetting::instance();

        return view('web.about', compact('settings'));
    }

    public function service()
    {
        return view('web.service');
    }

    public function blog(Request $request)
    {
        $search   = $request->input('search');
        $category = $request->input('category');
        $tag      = $request->input('tag');
        $month    = $request->input('month');
        $blogs = Blog::where('is_active', 1)
            ->when($search, fn($q) => $q->where(fn($q) =>
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
            ))
            ->when($category, fn($q) => $q->where('category', $category))
            ->when($tag, fn($q) => $q->where('tags', 'like', "%{$tag}%"))
            ->when($month, fn($q) => $q->whereRaw("DATE_FORMAT(published_at, '%Y-%m') = ?", [$month]))
            ->orderBy('sort_order')
            ->orderByDesc('published_at')
            ->paginate(6)
            ->appends(compact('search', 'category', 'tag', 'month'));

        $recent     = Blog::where('is_active', 1)->orderByDesc('published_at')->take(3)->get();

        $tags = Blog::where('is_active', 1)->whereNotNull('tags')->pluck('tags')
                    ->flatMap(fn($t) => array_filter(array_map('trim', explode(',', $t))))
                    ->unique()->sort()->values();

        $categories = Blog::where('is_active', 1)->whereNotNull('category')
                          ->selectRaw('category, COUNT(*) as posts_count')
                          ->groupBy('category')
                          ->orderBy('category')
                          ->get();

        $archive = Blog::where('is_active', 1)->whereNotNull('published_at')
                       ->selectRaw('DATE_FORMAT(published_at, "%Y-%m") as month_key, DATE_FORMAT(published_at, "%M %Y") as month_label, COUNT(*) as posts_count')
                       ->groupBy('month_key', 'month_label')
                       ->orderByDesc('month_key')
                       ->get();

        return view('web.blog', compact('blogs', 'recent', 'tags', 'search', 'category', 'categories', 'archive'));
    }

    public function blogById(int $id)
    {
        $blog = Blog::findOrFail($id);

        if (empty($blog->slug)) {
            $blog->slug = Blog::uniqueSlug($blog->title, $blog->id);
            $blog->saveQuietly();
        }

        return redirect()->route('blog.details', $blog->slug);
    }

    public function blogDetails(Blog $blog)
    {
        if (empty($blog->slug)) {
            $blog->slug = Blog::uniqueSlug($blog->title, $blog->id);
            $blog->saveQuietly();
            return redirect()->route('blog.details', $blog->slug);
        }

        $recent  = Blog::where('is_active', 1)->where('id', '!=', $blog->id)->orderByDesc('published_at')->take(3)->get();
        $related = Blog::where('is_active', 1)->where('id', '!=', $blog->id)->where('category', $blog->category)->take(2)->get();
        $prev    = Blog::where('is_active', 1)->where('id', '<', $blog->id)->orderByDesc('id')->first();
        $next    = Blog::where('is_active', 1)->where('id', '>', $blog->id)->orderBy('id')->first();
        $tags    = Blog::where('is_active', 1)->whereNotNull('tags')->distinct()->pluck('tags');

        return view('web.blog-details', compact('blog', 'recent', 'related', 'prev', 'next', 'tags'));
    }

    public function faq()
    {
        $faqs = Faq::where('is_active', 1)
            ->orderBy('category')
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category');

        return view('web.faq', compact('faqs'));
    }

    public function privacyPolicy()
    {
        $settings = \App\Models\SiteSetting::instance();
        $privacyPolicy = $settings->privacy_policy;

        return view('web.privacy-policy', compact('privacyPolicy'));
    }

}
