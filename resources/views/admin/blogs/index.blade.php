@extends('admin.layout.table.index')

@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item active">Blog Posts</li>
    </ol>
@endsection

@section('buttons')
    <a class="btn btn-success" href="{{ url('/admin/blogs/create') }}">+ Add Post</a>
@endsection

@section('filters')
    <form method="GET" action="{{ url('admin/blogs') }}">
        <div class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label fw-bold">Category</label>
                <select name="category" class="form-control">
                    <option value="">All Categories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Search title..." value="{{ request('title') }}">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">Status</label>
                <select name="status" class="form-control">
                    <option value="">All</option>
                    <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="col-md-3 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
                <a href="{{ url('admin/blogs') }}" class="btn btn-secondary"><i class="fa fa-times"></i> Reset</a>
            </div>
        </div>
    </form>
@endsection

@section('thead')
    <tr>
        <th>#</th>
        <th>Image</th>
        <th>Title</th>
        <th>Category</th>
        <th>Tags</th>
        <th>Published</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
@endsection

@section('tbody')
    @forelse($items as $blog)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>
                <img src="{{ $blog->image_url }}" alt="image"
                    style="width:60px;height:45px;object-fit:cover;border-radius:6px;">
            </td>
            <td class="text-start">{{ Str::limit($blog->title, 45) }}</td>
            <td><span class="badge badge-primary">{{ $blog->category }}</span></td>
            <td>
                @foreach($blog->tags_array as $tag)
                    <span class="badge badge-light border">{{ $tag }}</span>
                @endforeach
            </td>
            <td>{{ $blog->published_at?->format('d M Y') ?? '-' }}</td>
            <td>
                @if($blog->is_active)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-secondary">Inactive</span>
                @endif
            </td>
            <td>
                <a href="{{ url('admin/blogs/' . $blog->id . '/edit') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <button type="button" onclick="deleteItem('{{ url('admin/blogs/' . $blog->id) }}')"
                    class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="text-center text-muted">No blog posts found</td>
        </tr>
    @endforelse
@endsection

@section('modals')
    @includeIf('admin.components.modals.delete-modal')
@endsection

@section('js')
    <script>
        function deleteItem(url) {
            $('.deleteForm').attr('action', url);
            $('.deleteModal').modal('show');
        }
    </script>
@endsection
