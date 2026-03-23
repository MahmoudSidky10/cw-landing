@extends('admin.layout.table.index')

@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item active">Social Media</li>
    </ol>
@endsection

@section('buttons')
    <a class="btn btn-success" href="{{ url('/admin/social-media/create') }}">
        {{ trans('language.add') }}
    </a>
@endsection

@section('thead')
    <tr>
        <th>#</th>
        <th>Icon</th>
        <th>URL</th>
        <th>Actions</th>
    </tr>
@endsection

@section('tbody')
    @forelse($items as $social)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>
                @if($social->icon)
                    <img src="{{ asset('storage/' . $social->icon) }}" alt="icon" style="width:40px;height:40px;object-fit:contain;">
                @else
                    <span class="text-muted">—</span>
                @endif
            </td>
            <td><a href="{{ $social->url }}" target="_blank">{{ $social->url }}</a></td>
            <td>
                <a href="{{ url('admin/social-media/' . $social->id . '/edit') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <button type="button" onclick="deleteItem('{{ url('admin/social-media/' . $social->id) }}')"
                    class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center text-muted">No social media links found</td>
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
