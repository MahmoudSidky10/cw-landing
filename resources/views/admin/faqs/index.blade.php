@extends('admin.layout.table.index')

@section('nav')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
        <li class="breadcrumb-item active">FAQs</li>
    </ol>
@endsection
@section('buttons')
    <a class="btn btn-success" href="{{ url('/admin/faqs/create') }}">
        {{ trans('language.add') }}
    </a>
@endsection

@section('filters')
    <form method="GET" action="{{ url('admin/faqs') }}">
        <div class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label fw-bold">Category</label>
                <select name="category" class="form-control">
                    <option value="">All Categories</option>
                    <option value="General FAQ"             {{ request('category') == 'General FAQ'             ? 'selected' : '' }}>General FAQ</option>
                    <option value="Billing FAQ"             {{ request('category') == 'Billing FAQ'             ? 'selected' : '' }}>Billing FAQ</option>
                    <option value="Refund & cancellation FAQ" {{ request('category') == 'Refund & cancellation FAQ' ? 'selected' : '' }}>Refund &amp; cancellation FAQ</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">Question</label>
                <input type="text" name="question" class="form-control"
                    placeholder="Search question..." value="{{ request('question') }}">
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
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i> Filter
                </button>
                <a href="{{ url('admin/faqs') }}" class="btn btn-secondary">
                    <i class="fa fa-times"></i> Reset
                </a>
            </div>
        </div>
    </form>
@endsection

@section('thead')
    <tr>
        <th>#</th>
        <th>Category</th>
        <th>Question</th>
        <th>Order</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
@endsection

@section('tbody')
    @forelse($items as $faq)
        <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td><span class="badge badge-primary">{{ $faq->category }}</span></td>
            <td>{{ Str::limit($faq->question, 60) }}</td>
            <td>{{ $faq->sort_order }}</td>
            <td>
                @if ($faq->is_active)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-secondary">Inactive</span>
                @endif
            </td>
            <td>
                <a href="{{ url('admin/faqs/' . $faq->id . '/edit') }}" class="btn btn-sm btn-warning">
                    <i class="fa fa-edit"></i> Edit
                </a>
                <button type="button" onclick="deleteItem('{{ url('admin/faqs/' . $faq->id) }}')"
                    class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center text-muted">No FAQs found</td>
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
