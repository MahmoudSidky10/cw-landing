<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $items = SocialMedia::orderBy('id')->paginate(15);
        return view('admin.social-media.index', compact('items'));
    }

    public function create()
    {
        return view('admin.social-media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon'      => 'nullable|image|max:2048',
            'home_icon' => 'nullable|image|max:2048',
            'url'       => 'required|url|max:255',
        ]);

        $data = $request->except(['icon', 'home_icon']);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('social-media', 'public');
        }

        if ($request->hasFile('home_icon')) {
            $data['home_icon'] = $request->file('home_icon')->store('social-media', 'public');
        }

        SocialMedia::create($data);

        return redirect('/admin/social-media')->with('success', 'Social media link added successfully');
    }

    public function edit(SocialMedia $socialMedium)
    {
        $item = $socialMedium;
        return view('admin.social-media.edit', compact('item'));
    }

    public function update(Request $request, SocialMedia $socialMedium)
    {
        $request->validate([
            'icon'      => 'nullable|image|max:2048',
            'home_icon' => 'nullable|image|max:2048',
            'url'       => 'required|url|max:255',
        ]);

        $data = $request->except(['icon', 'home_icon']);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('social-media', 'public');
        }

        if ($request->hasFile('home_icon')) {
            $data['home_icon'] = $request->file('home_icon')->store('social-media', 'public');
        }

        $socialMedium->update($data);

        return redirect('/admin/social-media')->with('success', 'Social media link updated successfully');
    }

    public function destroy(SocialMedia $socialMedium)
    {
        $socialMedium->delete();
        return redirect('/admin/social-media')->with('success', 'Social media link deleted successfully');
    }
}
