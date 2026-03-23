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
                            <li class="breadcrumb-item active">Site Settings</li>
                        </ol>

                        <div class="card shadow-sm border-0" style="border-radius:16px; ;">
                            <div class="card-body" style="padding:32px;">

                                <h4 class="fw-bold text-dark mb-1">Site Settings</h4>
                                <p class="text-muted fs-13 mb-8">Control the contact information displayed on the website.
                                </p>

                                @if (session('success'))
                                    <div class="alert alert-success mb-6">{{ session('success') }}</div>
                                @endif

                                <form method="POST" action="{{ route('admin.site-settings.update') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group mb-5 col-6">
                                                <label class="fw-bold text-dark mb-2">
                                                    <i class="fa fa-phone text-primary me-2"></i> Call Us
                                                </label>
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ old('phone', $settings->phone) }}"
                                                    placeholder="+1 302-803-5506">
                                                @error('phone')
                                                    <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-5 col-6">
                                                <label class="fw-bold text-dark mb-2">
                                                    <i class="fa fa-envelope text-primary me-2"></i> Email Us
                                                </label>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email', $settings->email) }}"
                                                    placeholder="support@cyberwatch360.com">
                                                @error('email')
                                                    <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-5 col-6 ">
                                                <label class="fw-bold text-dark mb-2">
                                                    <i class="fa fa-map-marker text-primary me-2"></i> Office Address — Line
                                                    1
                                                </label>
                                                <input type="text" name="address" class="form-control"
                                                    value="{{ old('address', $settings->address) }}"
                                                    placeholder="1007 N Orange St, 5302">
                                                @error('address')
                                                    <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group mb-8 col-6">
                                                <label class="fw-bold text-dark mb-2">
                                                    <i class="fa fa-map-marker text-primary me-2"></i> Office Address — Line
                                                    2
                                                </label>
                                                <input type="text" name="address_2" class="form-control"
                                                    value="{{ old('address_2', $settings->address_2) }}"
                                                    placeholder="Wilmington, DE 19801">
                                                @error('address_2')
                                                    <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary px-8">
                                        <i class="fa fa-save me-2"></i> Save Settings
                                    </button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
