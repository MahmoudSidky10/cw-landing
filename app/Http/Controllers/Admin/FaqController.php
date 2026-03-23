<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $items = Faq::query()
            ->when($request->category, fn($q) => $q->where('category', $request->category))
            ->when($request->question, fn($q) => $q->where('question', 'like', '%' . $request->question . '%'))
            ->when($request->status !== null && $request->status !== '', fn($q) => $q->where('is_active', $request->status))
            ->orderBy('category')
            ->orderBy('sort_order')
            ->paginate(15);

        return view('admin.faqs.index', compact('items'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:100',
            'question' => 'required|string|max:500',
            'answer'   => 'required|string',
        ]);

        Faq::create($request->all());

        return redirect('/admin/faqs')->with('success', 'تم إضافة السؤال بنجاح');
    }

    public function edit(Faq $faq)
    {
        $item = $faq;
        return view('admin.faqs.edit', compact('item'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'category' => 'required|string|max:100',
            'question' => 'required|string|max:500',
            'answer'   => 'required|string',
        ]);

        $faq->update($request->all());

        return redirect('/admin/faqs')->with('success', 'تم تحديث السؤال بنجاح');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/admin/faqs')->with('success', 'تم حذف السؤال بنجاح');
    }
}
