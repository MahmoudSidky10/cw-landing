@extends('admin.layout.forms.edit.index')
@section('action', 'blog-categories/' . $item->id)
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/blog-categories') }}">Blog Categories</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
@section('title', 'Edit Blog Category')

@section('form-groups')

    @includeIf('admin.components.form.edit.text', [
        'label'       => 'Name',
        'name'        => 'name',
        'placeholder' => 'e.g. Cyber Security',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    <div class="form-group">
        <label class="fw-bold">Slug</label>
        <input type="text" name="slug" class="form-control" dir="ltr"
            placeholder="e.g. cyber-security" value="{{ old('slug', $item->slug) }}">
    </div>

    @includeIf('admin.components.form.edit.textarea', [
        'label'       => 'Description',
        'name'        => 'description',
        'placeholder' => 'Short description of this category...',
        'dir'         => 'ltr',
    ])

    <div class="form-group">
        <label class="fw-bold">Sort Order</label>
        <input type="number" name="sort_order" class="form-control"
            value="{{ old('sort_order', $item->sort_order) }}" placeholder="0">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="is_active" class="form-control">
            <option value="1" {{ old('is_active', $item->is_active) ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !old('is_active', $item->is_active) ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

@endsection
@section('submit-button-title', 'Update')
