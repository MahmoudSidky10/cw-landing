@extends('admin.layout.forms.edit.index')
@section('action', 'social-media/' . $item->id)
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/social-media') }}">Social Media</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
@section('title', 'Edit Social Media Link')

@section('form-groups')

    <div class="form-group">
        <label class="fw-bold">Icon Image <small class="text-muted">(used in marketing footer)</small></label>
        @if($item->icon)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $item->icon) }}" alt="Current icon" style="width:60px;height:60px;object-fit:contain;">
                <small class="text-muted d-block">Upload a new image to replace</small>
            </div>
        @endif
        <input type="file" name="icon" class="form-control" accept="image/*">
    </div>

    <div class="form-group">
        <label class="fw-bold">Home Icon Image <small class="text-muted">(used in home page footer)</small></label>
        @if($item->home_icon)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $item->home_icon) }}" alt="Current home icon" style="width:60px;height:60px;object-fit:contain;">
                <small class="text-muted d-block">Upload a new image to replace</small>
            </div>
        @endif
        <input type="file" name="home_icon" class="form-control" accept="image/*">
    </div>

    @includeIf('admin.components.form.edit.text', [
        'label'       => 'URL',
        'name'        => 'url',
        'placeholder' => 'https://...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

@endsection
@section('submit-button-title', 'Update')
