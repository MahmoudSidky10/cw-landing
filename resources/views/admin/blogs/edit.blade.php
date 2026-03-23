@extends('admin.layout.forms.edit.index')
@section('action', 'blogs/' . $item->id)
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/blogs') }}">Blog Posts</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
@section('title', 'Edit Blog Post')

@section('form-groups')

    @includeIf('admin.components.form.edit.text', [
        'label'       => 'Title',
        'name'        => 'title',
        'placeholder' => 'Enter post title...',
        'required'    => 'required',
        'dir'         => 'ltr',
    ])

    <div class="form-group">
        <label class="required fw-bold">Category</label>
        <select name="category" class="form-control" required>
            <option value="">-- Select Category --</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->name }}" {{ old('category', $item->category) == $cat->name ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="fw-bold">Tags</label>
        <input id="tags-input" class="form-control" placeholder="Add tags...">
        <input type="hidden" name="tags" id="tags-hidden" value="{{ old('tags', $item->tags) }}">
        <small class="text-muted">Press Enter or comma to add a tag</small>
    </div>

    <div class="form-group">
        <label class="fw-bold">Content</label>
        <textarea id="mymce_en" name="content">{!! old('content', $item->content) !!}</textarea>
    </div>

    <div class="form-group">
        <label>Featured Image</label>
        @if($item->image)
            <div class="mb-2">
                <img src="{{ $item->image_url }}" alt="current image"
                    style="height:80px;border-radius:6px;object-fit:cover;">
            </div>
        @endif
        <input type="file" name="image" class="form-control" accept="image/*">
        <small class="text-muted">Leave empty to keep current image</small>
    </div>

    <div class="form-group">
        <label>Published Date</label>
        <input type="date" name="published_at" class="form-control"
            value="{{ old('published_at', $item->published_at?->format('Y-m-d')) }}">
    </div>

    <div class="form-group">
        <label>Sort Order</label>
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

@section('js')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script>
        var tagify = new Tagify(document.getElementById('tags-input'), {
            delimiters: ',', maxTags: 20,
        });
        var initialTags = document.getElementById('tags-hidden').value;
        if (initialTags) tagify.addTags(initialTags.split(',').map(t => t.trim()).filter(Boolean));
        tagify.on('change', function() {
            document.getElementById('tags-hidden').value = tagify.value.map(t => t.value).join(',');
        });
    </script>

    <script src="{{ asset('assets/admin/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var plugins = [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ];
            var toolbar = "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons";

            if ($("#mymce_en").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce_en",
                    theme: "modern",
                    height: 400,
                    directionality: 'ltr',
                    plugins: plugins,
                    toolbar: toolbar,
                });
            }
        });
    </script>
@endsection
