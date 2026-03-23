@extends('admin.layout.forms.add.index')
@section('action', 'social-media')
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/social-media') }}">Social Media</a></li>
        <li class="breadcrumb-item active">Add</li>
    </ol>
@endsection
@section('title', 'Add Social Media Link')

@section('form-groups')

    <div class="form-group">
        <label class="fw-bold">Icon Image <small class="text-muted">(used in marketing footer)</small></label>
        <input type="file" name="icon" class="form-control" accept="image/*">
    </div>

    <div class="form-group">
        <label class="fw-bold">Home Icon Image <small class="text-muted">(used in home page footer)</small></label>
        <input type="file" name="home_icon" class="form-control" accept="image/*">
    </div>

    @includeIf('admin.components.form.add.text', [
        'label'       => 'URL',
        'name'        => 'url',
        'placeholder' => 'https://...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

@endsection
@section('submit-button-title', 'Save')
