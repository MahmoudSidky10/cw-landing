@extends('admin.layout.table.index')

@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item active">Contact Messages</li>
    </ol>
@endsection

@section('buttons')
    @php $unread = \App\Models\Contact::where('is_read', 0)->count(); @endphp
    @if($unread)
        <span class="badge badge-danger fs-6">{{ $unread }} Unread</span>
    @endif
@endsection

@section('filters')
    <form method="GET" action="{{ url('admin/contacts') }}">
        <div class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label fw-bold">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Search name..." value="{{ request('name') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label fw-bold">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Search email..." value="{{ request('email') }}">
            </div>
            <div class="col-md-2">
                <label class="form-label fw-bold">Status</label>
                <select name="status" class="form-control">
                    <option value="">All</option>
                    <option value="unread" {{ request('status') === 'unread' ? 'selected' : '' }}>Unread</option>
                    <option value="read"   {{ request('status') === 'read'   ? 'selected' : '' }}>Read</option>
                </select>
            </div>
            <div class="col-md-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
                <a href="{{ url('admin/contacts') }}" class="btn btn-secondary"><i class="fa fa-times"></i> Reset</a>
            </div>
        </div>
    </form>
@endsection

@section('thead')
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Status</th>
        <th>Received</th>
        <th>Actions</th>
    </tr>
@endsection

@section('tbody')
    @forelse($items as $contact)
        <tr class="text-center {{ !$contact->is_read ? 'table-warning' : '' }}">
            <td>{{ $loop->iteration }}</td>
            <td class="fw-bold text-start">{{ $contact->name }}</td>
            <td class="text-start">{{ $contact->email }}</td>
            <td class="text-start">{{ Str::limit($contact->subject, 40) ?? '—' }}</td>
            <td>
                @if($contact->is_read)
                    <span class="badge badge-success">Read</span>
                @else
                    <span class="badge badge-warning">Unread</span>
                @endif
            </td>
            <td>{{ $contact->created_at->format('d M Y, H:i') }}</td>
            <td>
                <a href="{{ url('admin/contacts/' . $contact->id) }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-eye"></i> View
                </a>
                <button type="button" onclick="deleteItem('{{ url('admin/contacts/' . $contact->id) }}')"
                    class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center text-muted">No messages yet.</td>
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
