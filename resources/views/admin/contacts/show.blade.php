@extends('admin.layout.index')
@section('content')
    @include('admin.layout.nav', ['title' => ''])

    <div class="d-flex flex-column-fluid">
        <div class="container-fluid">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid">

                        <ol class="breadcrumb mb-6">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dash') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/contacts') }}">Messages</a></li>
                            <li class="breadcrumb-item active">Message #{{ $contact->id }}</li>
                        </ol>

                        <div class="card shadow-sm border-0" style="border-radius:16px;">
                            <div class="card-body" style="padding:32px;">

                                <label class="text-muted fs-12 fw-bold text-uppercase"
                                    style="letter-spacing:.5px;">Subject</label>
                                <div class="d-flex align-items-center justify-content-between mb-6">
                                    <h4 class="fw-bold text-dark mb-0">{{ $contact->subject ?? 'No Subject' }}</h4>
                                    <span class="badge {{ $contact->is_read ? 'badge-success' : 'badge-warning' }}">
                                        {{ $contact->is_read ? 'Read' : 'Unread' }}
                                    </span>
                                </div>

                                <div class="row g-4 mb-6">
                                    <div class="col-md-4">
                                        <label class="text-muted fs-12 fw-bold text-uppercase"
                                            style="letter-spacing:.5px;">From</label>
                                        <div class="fw-bold text-dark fs-15 mt-1">{{ $contact->name }}</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="text-muted fs-12 fw-bold text-uppercase"
                                            style="letter-spacing:.5px;">Email</label>
                                        <div class="mt-1">
                                            <a href="mailto:{{ $contact->email }}"
                                                class="text-primary fw-bold">{{ $contact->email }}</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="text-muted fs-12 fw-bold text-uppercase"
                                            style="letter-spacing:.5px;">Received</label>
                                        <div class="mt-1">{{ $contact->created_at->format('l, d M Y — H:i') }}</div>
                                    </div>
                                </div>

                                <div class="border-top pt-5">
                                    <label class="text-muted fs-12 fw-bold text-uppercase mb-3"
                                        style="letter-spacing:.5px;">Message</label>
                                    <div class="text-dark" style="">
                                        {{ $contact->message }}</div>
                                </div>

                                <div class="d-flex gap-4 mt-8" style="gap:16px !important;">
                                    <a href="mailto:{{ $contact->email }}" class="btn btn-primary">
                                        <i class="fa fa-reply"></i> Reply via Email
                                    </a>
                                    <a href="{{ url('admin/contacts') }}" class="btn btn-secondary">
                                        <i class="fa fa-arrow-left"></i> Back
                                    </a>
                                    <form method="POST" action="{{ url('admin/contacts/' . $contact->id) }}"
                                        class="ms-auto">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Delete this message?')">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
