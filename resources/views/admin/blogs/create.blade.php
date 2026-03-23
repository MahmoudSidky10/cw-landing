@extends('admin.layout.forms.add.index')
@section('action', 'blogs')
@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/blogs') }}">Blog Posts</a></li>
        <li class="breadcrumb-item active">Add Post</li>
    </ol>
@endsection
@section('title', 'Add Blog Post')

@section('form-groups')

    @includeIf('admin.components.form.add.text', [
        'label' => 'Title',
        'name' => 'title',
        'placeholder' => 'Enter post title...',
        'required' => 'required',
        'dir' => 'ltr',
    ])

    <div class="form-group">
        <label class="required fw-bold">Category</label>
        <select name="category" class="form-control" required>
            <option value="">-- Select Category --</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->name }}" {{ old('category') == $cat->name ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="fw-bold">Tags</label>
        <input id="tags-input" class="form-control" placeholder="Add tags...">
        <input type="hidden" name="tags" id="tags-hidden" value="{{ old('tags') }}">
        <small class="text-muted">Press Enter or comma to add a tag</small>
    </div>

    <div class="form-group">
        <label class="fw-bold">Content</label>
        <textarea id="mymce_en" name="content">{{ old('content') }}</textarea>
    </div>

    <div class="form-group">
        <label>Featured Image</label>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>

    <div class="form-group">
        <label>Published Date</label>
        <input type="date" name="published_at" class="form-control" value="{{ old('published_at', date('Y-m-d')) }}">
    </div>

    <div class="form-group">
        <label>Sort Order</label>
        <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" placeholder="0">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="is_active" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>

@endsection
@section('submit-button-title', 'Save')

@section('js')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/ckeditor5@44.3.0/dist/browser/ckeditor5.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ckeditor5@44.3.0/dist/browser/ckeditor5.css">
    <script>
        // Tagify
        var tagify = new Tagify(document.getElementById('tags-input'), {
            delimiters: ',',
            maxTags: 20,
        });
        var initialTags = document.getElementById('tags-hidden').value;
        if (initialTags) tagify.addTags(initialTags.split(',').map(t => t.trim()).filter(Boolean));
        tagify.on('change', function() {
            document.getElementById('tags-hidden').value = tagify.value.map(t => t.value).join(',');
        });

        // CKEditor 5
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Underline,
            Strikethrough,
            Heading,
            Link,
            List,
            BlockQuote,
            Image,
            ImageUpload,
            ImageResize,
            Table,
            TableToolbar,
            MediaEmbed,
            HorizontalLine,
            Indent,
            Alignment,
            Font,
            Paragraph
        } = CKEDITOR;
    </script>

    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('assets/admin/') }}/js/tinymce/tinymce.min.js"></script>
    <script>
        $(document).ready(function() {
            var plugins = [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ];
            var toolbar =
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons";
            var height = 300;
            var theme = "modern";
            if ($("#mymce_ar").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce_ar",
                    theme: theme,
                    height: height,
                    directionality: 'rtl',
                    plugins: plugins,
                    toolbar: toolbar,
                });
            }

            if ($("#mymce_en").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce_en",
                    theme: theme,
                    height: height,
                    directionality: 'ltr',
                    plugins: plugins,
                    toolbar: toolbar,
                });
            }
        });
    </script>
@endsection
