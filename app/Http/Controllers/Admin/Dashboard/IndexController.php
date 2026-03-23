<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
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
