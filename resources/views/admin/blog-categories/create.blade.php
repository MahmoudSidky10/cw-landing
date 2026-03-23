@extends('admin.layout.forms.add.index')
@section('action', 'blog-categories')
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/blog-categories') }}">Blog Categories</a></li>
        <li class="breadcrumb-item active">Add Category</li>
    </ol>
@endsection
@section('title', 'Add Blog Category')

@section('form-groups')

    @includeIf('admin.components.form.add.text', [
        'label'       => 'Name',
        'name'        => 'name',
        'placeholder' => 'e.g. Cyber Security',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    <div class="form-group">
        <label class="fw-bold">Slug <small class="text-muted">(auto-generated if empty)</small></label>
        <input type="text" name="slug" class="form-control" dir="ltr"
            placeholder="e.g. cyber-security" value="{{ old('slug') }}">
    </div>

    @includeIf('admin.components.form.add.textarea', [
        'label'       => 'Description',
        'name'        => 'description',
        'placeholder' => 'Short description of this category...',
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
