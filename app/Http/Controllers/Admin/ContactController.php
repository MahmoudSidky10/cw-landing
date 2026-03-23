<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::query()
            ->when($request->name,  fn($q) => $q->where('name', 'like', "%{$request->name}%"))
            ->when($request->email, fn($q) => $q->where('email', 'like', "%{$request->email}%"))
            ->when($request->status === 'read',   fn($q) => $q->where('is_read', 1))
            ->when($request->status === 'unread', fn($q) => $q->where('is_read', 0))
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('admin.contacts.index', compact('items'));
    }

    public function show(Contact $contact)
    {
        $contact->update(['is_read' => 1]);
        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect('/admin/contacts')->with('success', 'Message deleted.');
    }
}
