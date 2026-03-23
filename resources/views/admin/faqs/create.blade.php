@extends('admin.layout.forms.add.index')
@section('action', 'faqs')
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/faqs') }}">FAQs</a></li>
        <li class="breadcrumb-item active">Add FAQ</li>
    </ol>
@endsection
@section('title', 'Add FAQ')
@section('form-groups')

    <div class="form-group">
        <label class="required">Category</label>
        <select name="category" class="form-control" required>
            <option value="">-- Select Category --</option>
            <option value="General FAQ" {{ old('category') == 'General FAQ' ? 'selected' : '' }}>General FAQ</option>
            <option value="Billing FAQ" {{ old('category') == 'Billing FAQ' ? 'selected' : '' }}>Billing FAQ</option>
            <option value="Refund & cancellation FAQ" {{ old('category') == 'Refund & cancellation FAQ' ? 'selected' : '' }}>Refund &amp; cancellation FAQ</option>
        </select>
    </div>

    @includeIf('admin.components.form.add.text', [
        'label'       => 'Question',
        'name'        => 'question',
        'placeholder' => 'Enter the question...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    @includeIf('admin.components.form.add.textarea', [
        'label'       => 'Answer',
        'name'        => 'answer',
        'placeholder' => 'Enter the answer...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    @includeIf('admin.components.form.add.number', [
        'label'       => 'Sort Order',
        'name'        => 'sort_order',
        'placeholder' => '0',
        'value'       => '0',
    ])

    <div class="form-group">
        <label>Status</label>
        <select name="is_active" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>

@endsection
@section('submit-button-title', 'Save')
