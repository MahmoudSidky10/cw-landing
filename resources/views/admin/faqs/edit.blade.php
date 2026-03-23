@extends('admin.layout.forms.edit.index')
@section('action', 'faqs/' . $item->id)
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/faqs') }}">FAQs</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
@section('title', 'Edit FAQ')
@section('form-groups')

    <div class="form-group">
        <label class="required">Category</label>
        <select name="category" class="form-control" required>
            <option value="">-- Select Category --</option>
            <option value="General FAQ" {{ $item->category == 'General FAQ' ? 'selected' : '' }}>General FAQ</option>
            <option value="Billing FAQ" {{ $item->category == 'Billing FAQ' ? 'selected' : '' }}>Billing FAQ</option>
            <option value="Refund & cancellation FAQ" {{ $item->category == 'Refund & cancellation FAQ' ? 'selected' : '' }}>Refund &amp; cancellation FAQ</option>
        </select>
    </div>

    @includeIf('admin.components.form.edit.text', [
        'label'       => 'Question',
        'name'        => 'question',
        'placeholder' => 'Enter the question...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    @includeIf('admin.components.form.edit.textarea', [
        'label'       => 'Answer',
        'name'        => 'answer',
        'placeholder' => 'Enter the answer...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    @includeIf('admin.components.form.edit.text', [
        'label'       => 'Sort Order',
        'name'        => 'sort_order',
        'placeholder' => '0',
        'type'        => 'number',
    ])

    <div class="form-group">
        <label>Status</label>
        <select name="is_active" class="form-control">
            <option value="1" {{ $item->is_active ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$item->is_active ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

@endsection
@section('submit-button-title', 'Update')
