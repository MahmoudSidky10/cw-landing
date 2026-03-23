@extends('admin.layout.table.index')

@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item active">Blog Categories</li>
    </ol>
@endsection

@section('buttons')
    <a class="btn btn-success" href="{{ url('/admin/blog-categories/create') }}">+ Add Category</a>
@endsection

@section('filters')
    <form method="GET" action="{{ url('admin/blog-categories') }}">
        <div class="row g-3 align-items-end">
            <div class="col-md-5">
                <label class="form-label fw-bold">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Search name..." value="{{ request('name') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label fw-bold">Status</label>
                <select name="status" class="form-control">
                    <option value="">All</option>
                    <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="col-md-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
                <a href="{{ url('admin/blog-categories') }}" class="btn btn-secondary"><i class="fa fa-times"></i> Reset</a>
            </div>
        </div>
    </form>
@endsection

@section('thead')
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Order</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
@endsection

@section('tbody')
    @forelse($items as $category)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td class="fw-bold">{{ $category->name }}</td>
            <td><code>{{ $category->slug }}</code></td>
            <td class="text-start">{{ Str::limit($category->description, 60) ?? '-' }}</td>
            <td>{{ $category->sort_order }}</td>
            <td>
                @if($category->is_active)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-secondary">Inactive</span>
                @endif
            </td>
            <td>
                <a href="{{ url('admin/blog-categories/' . $category->id . '/edit') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <button type="button" onclick="deleteItem('{{ url('admin/blog-categories/' . $category->id) }}')"
                    class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center text-muted">No categories found</td>
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
