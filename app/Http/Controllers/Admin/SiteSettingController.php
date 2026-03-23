<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::instance();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone'     => 'nullable|string|max:50',
            'email'     => 'nullable|email|max:150',
            'address'   => 'nullable|string|max:255',
            'address_2' => 'nullable|string|max:255',
        ]);

        SiteSetting::instance()->update($request->only('phone', 'email', 'address', 'address_2'));

        return back()->with('success', 'Settings updated successfully.');
    }
}
