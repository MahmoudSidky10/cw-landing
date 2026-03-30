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

                                <form method="POST" action="{{ route('admin.site-settings.update') }}" enctype="multipart/form-data">
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

                                    <hr class="my-10">

                                    <h4 class="fw-bold text-dark mb-1">Site Logo</h4>
                                    <p class="text-muted fs-13 mb-6">Upload your site logos. The main logo is used in the navbar and hero. The dark variant is used in footers on light backgrounds.</p>

                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <div class="card border mb-5">
                                                <div class="card-header bg-light"><strong>Main Logo</strong></div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <img src="{{ $settings->resolvedLogoUrl() }}" alt="Current logo" style="max-height:80px;border-radius:8px;background:#1a1a2e;padding:8px;">
                                                    </div>
                                                    <input type="file" name="logo_upload" class="form-control" accept="image/*">
                                                    @error('logo_upload')
                                                        <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card border mb-5">
                                                <div class="card-header bg-light"><strong>Dark Logo <span class="text-muted fw-normal">(for light backgrounds)</span></strong></div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <img src="{{ $settings->resolvedLogoDarkUrl() }}" alt="Current dark logo" style="max-height:80px;border-radius:8px;background:#f5f5f5;padding:8px;">
                                                    </div>
                                                    <input type="file" name="logo_dark_upload" class="form-control" accept="image/*">
                                                    @error('logo_dark_upload')
                                                        <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-10">

                                    <h4 class="fw-bold text-dark mb-1">Home — Hero Image</h4>
                                    <p class="text-muted fs-13 mb-6">Control the main hero image displayed at the top of the homepage.</p>

                                    <div class="card border mb-5">
                                        <div class="card-header bg-light"><strong>Hero image</strong></div>
                                        <div class="card-body">
                                            @php
                                                $heroImgPath = old('hero_image', $settings->hero_image ?: \App\Models\SiteSetting::defaultHeroImage());
                                            @endphp
                                            @if ($heroImgPath)
                                                <div class="mb-3"><img src="{{ \App\Models\SiteSetting::featureImageUrl($heroImgPath) }}" alt="" style="max-height:160px;border-radius:8px;"></div>
                                            @endif
                                            <div class="form-group mb-4">
                                                <label class="fw-bold text-dark mb-2">Upload image</label>
                                                <input type="file" name="hero_image_upload" class="form-control" accept="image/*">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="fw-bold text-dark mb-2">Image path (or leave after upload)</label>
                                                <input type="text" name="hero_image" class="form-control"
                                                    value="{{ $heroImgPath }}"
                                                    placeholder="{{ \App\Models\SiteSetting::defaultHeroImage() }}">
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-10">

                                    <h4 class="fw-bold text-dark mb-1">Home — Security operations section</h4>
                                    <p class="text-muted fs-13 mb-6">Title and cards under “Manage Security Operations…” on the homepage. For link fields, use a route name (e.g. <code>about</code>, <code>contact</code>) or leave empty for “#”. Images: upload a file or set a path such as <code>assets/img/cw/cw-threat-monitor.jpg</code>.</p>

                                    <div class="row mb-5">
                                        <div class="form-group col-md-6 mb-5">
                                            <label class="fw-bold text-dark mb-2">Section title (before highlight)</label>
                                            <input type="text" name="home_features_title_line1" class="form-control"
                                                value="{{ old('home_features_title_line1', $settings->home_features_title_line1) }}"
                                                placeholder="{{ \App\Models\SiteSetting::defaultHomeFeaturesTitleLine1() }}">
                                        </div>
                                        <div class="form-group col-md-6 mb-5">
                                            <label class="fw-bold text-dark mb-2">Highlighted phrase</label>
                                            <input type="text" name="home_features_title_highlight" class="form-control"
                                                value="{{ old('home_features_title_highlight', $settings->home_features_title_highlight) }}"
                                                placeholder="{{ \App\Models\SiteSetting::defaultHomeFeaturesTitleHighlight() }}">
                                        </div>
                                    </div>

                                    @foreach ([0 => 'Large card (left)', 1 => 'Medium card (right)', 2 => 'Security stack (text only)', 3 => 'Small card', 4 => 'Small card'] as $idx => $label)
                                        @php $b = $blocks[$idx] ?? []; @endphp
                                        <div class="card border mb-5">
                                            <div class="card-header bg-light"><strong>{{ $label }}</strong></div>
                                            <div class="card-body">
                                                @if (($b['type'] ?? '') !== 'stack_text')
                                                    <div class="form-group mb-4">
                                                        <label class="fw-bold text-dark mb-2">Image</label>
                                                        @if (!empty($b['image']))
                                                            <div class="mb-2"><img src="{{ \App\Models\SiteSetting::featureImageUrl($b['image']) }}" alt="" style="max-height:120px;border-radius:8px;"></div>
                                                        @endif
                                                        <input type="file" name="feature_image_{{ $idx }}" class="form-control" accept="image/*">
                                                        <input type="text" name="blocks[{{ $idx }}][image]" class="form-control mt-2"
                                                            value="{{ old('blocks.'.$idx.'.image', $b['image'] ?? '') }}"
                                                            placeholder="Path or leave after upload">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="fw-bold text-dark mb-2">Image alt text</label>
                                                        <input type="text" name="blocks[{{ $idx }}][alt]" class="form-control"
                                                            value="{{ old('blocks.'.$idx.'.alt', $b['alt'] ?? '') }}">
                                                    </div>
                                                @endif
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold text-dark mb-2">Title</label>
                                                    <input type="text" name="blocks[{{ $idx }}][title]" class="form-control"
                                                        value="{{ old('blocks.'.$idx.'.title', $b['title'] ?? '') }}">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="fw-bold text-dark mb-2">Title link (route name)</label>
                                                    <input type="text" name="blocks[{{ $idx }}][title_link]" class="form-control"
                                                        value="{{ old('blocks.'.$idx.'.title_link', $b['title_link'] ?? '') }}"
                                                        placeholder="about">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="fw-bold text-dark mb-2">Body</label>
                                                    <textarea name="blocks[{{ $idx }}][body]" class="form-control" rows="3">{{ old('blocks.'.$idx.'.body', $b['body'] ?? '') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @php $b5 = $blocks[5] ?? []; @endphp
                                    <div class="card border mb-5">
                                        <div class="card-header bg-light"><strong>Bottom wide block</strong></div>
                                        <div class="card-body">
                                            <div class="form-group mb-4">
                                                <label class="fw-bold text-dark mb-2">Headline</label>
                                                <textarea name="blocks[5][headline]" class="form-control" rows="2">{{ old('blocks.5.headline', $b5['headline'] ?? '') }}</textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-4">
                                                    <label class="fw-bold text-dark mb-2">Button text</label>
                                                    <input type="text" name="blocks[5][button_text]" class="form-control"
                                                        value="{{ old('blocks.5.button_text', $b5['button_text'] ?? '') }}">
                                                </div>
                                                <div class="form-group col-md-6 mb-4">
                                                    <label class="fw-bold text-dark mb-2">Button link (route name)</label>
                                                    <input type="text" name="blocks[5][button_link]" class="form-control"
                                                        value="{{ old('blocks.5.button_link', $b5['button_link'] ?? '') }}"
                                                        placeholder="about">
                                                </div>
                                            </div>
                                            <p class="fw-bold text-dark mb-2">Stats</p>
                                            <div class="row">
                                                @foreach ([0, 1] as $si)
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label class="small text-muted">Value {{ $si + 1 }}</label>
                                                            <input type="text" name="blocks[5][stats][{{ $si }}][value]" class="form-control"
                                                                value="{{ old('blocks.5.stats.'.$si.'.value', data_get($b5, 'stats.'.$si.'.value', '')) }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="small text-muted">Label {{ $si + 1 }}</label>
                                                            <input type="text" name="blocks[5][stats][{{ $si }}][label]" class="form-control"
                                                                value="{{ old('blocks.5.stats.'.$si.'.label', data_get($b5, 'stats.'.$si.'.label', '')) }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <p class="fw-bold text-dark mb-2">Timeline</p>
                                            @foreach ([0, 1, 2] as $ti)
                                                <div class="border rounded p-3 mb-3">
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Step {{ $ti + 1 }} title</label>
                                                        <input type="text" name="blocks[5][timeline][{{ $ti }}][title]" class="form-control"
                                                            value="{{ old('blocks.5.timeline.'.$ti.'.title', data_get($b5, 'timeline.'.$ti.'.title', '')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Step {{ $ti + 1 }} body</label>
                                                        <textarea name="blocks[5][timeline][{{ $ti }}][body]" class="form-control" rows="2">{{ old('blocks.5.timeline.'.$ti.'.body', data_get($b5, 'timeline.'.$ti.'.body', '')) }}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <hr class="my-10">

                                    <h4 class="fw-bold text-dark mb-1">Home — “From alert to structured response…”</h4>
                                    <p class="text-muted fs-13 mb-6">Section title, hero image, and the eight feature columns below it. Icon names use the <a href="https://icon-sets.iconify.design/" target="_blank" rel="noopener">Iconify</a> format (e.g. <code>carbon:api-1</code>).</p>

                                    <div class="row mb-5">
                                        <div class="form-group col-md-6 mb-5">
                                            <label class="fw-bold text-dark mb-2">Title (before highlight)</label>
                                            <input type="text" name="home_features2_title_line1" class="form-control"
                                                value="{{ old('home_features2_title_line1', $settings->home_features2_title_line1) }}"
                                                placeholder="{{ \App\Models\SiteSetting::defaultHomeFeatures2TitleLine1() }}">
                                        </div>
                                        <div class="form-group col-md-6 mb-5">
                                            <label class="fw-bold text-dark mb-2">Highlighted phrase</label>
                                            <input type="text" name="home_features2_title_highlight" class="form-control"
                                                value="{{ old('home_features2_title_highlight', $settings->home_features2_title_highlight) }}"
                                                placeholder="{{ \App\Models\SiteSetting::defaultHomeFeatures2TitleHighlight() }}">
                                        </div>
                                    </div>

                                    <div class="card border mb-5">
                                        <div class="card-header bg-light"><strong>Hero image</strong></div>
                                        <div class="card-body">
                                            @php
                                                $heroPath = old('home_features2_hero_image', $settings->home_features2_hero_image ?: \App\Models\SiteSetting::defaultHomeFeatures2HeroImage());
                                            @endphp
                                            @if ($heroPath)
                                                <div class="mb-3"><img src="{{ \App\Models\SiteSetting::featureImageUrl($heroPath) }}" alt="" style="max-height:160px;border-radius:8px;"></div>
                                            @endif
                                            <div class="form-group mb-4">
                                                <label class="fw-bold text-dark mb-2">Upload image</label>
                                                <input type="file" name="feature2_hero_image" class="form-control" accept="image/*">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="fw-bold text-dark mb-2">Image path (or leave after upload)</label>
                                                <input type="text" name="home_features2_hero_image" class="form-control"
                                                    value="{{ $heroPath }}"
                                                    placeholder="{{ \App\Models\SiteSetting::defaultHomeFeatures2HeroImage() }}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="fw-bold text-dark mb-2">Image alt text</label>
                                                <input type="text" name="home_features2_hero_alt" class="form-control"
                                                    value="{{ old('home_features2_hero_alt', $settings->home_features2_hero_alt) }}"
                                                    placeholder="{{ \App\Models\SiteSetting::defaultHomeFeatures2HeroAlt() }}">
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($blocks2 as $idx2 => $c2)
                                        <div class="card border mb-4">
                                            <div class="card-header bg-light"><strong>Feature column {{ $idx2 + 1 }}</strong></div>
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label class="fw-bold text-dark mb-2">Icon (Iconify)</label>
                                                    <input type="text" name="blocks2[{{ $idx2 }}][icon]" class="form-control"
                                                        value="{{ old('blocks2.'.$idx2.'.icon', $c2['icon'] ?? '') }}"
                                                        placeholder="carbon:api-1">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="fw-bold text-dark mb-2">Title</label>
                                                    <input type="text" name="blocks2[{{ $idx2 }}][title]" class="form-control"
                                                        value="{{ old('blocks2.'.$idx2.'.title', $c2['title'] ?? '') }}">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="fw-bold text-dark mb-2">Title link (route name)</label>
                                                    <input type="text" name="blocks2[{{ $idx2 }}][title_link]" class="form-control"
                                                        value="{{ old('blocks2.'.$idx2.'.title_link', $c2['title_link'] ?? '') }}"
                                                        placeholder="about">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="fw-bold text-dark mb-2">Body</label>
                                                    <textarea name="blocks2[{{ $idx2 }}][body]" class="form-control" rows="3">{{ old('blocks2.'.$idx2.'.body', $c2['body'] ?? '') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    @include('admin.settings.about-page', ['about' => $about])

                                    <hr class="my-10">

                                    <h4 class="fw-bold text-dark mb-1">Privacy Policy</h4>
                                    <p class="text-muted fs-13 mb-6">Edit the privacy policy page content using the rich-text editor below.</p>

                                    <div class="form-group mb-5">
                                        <textarea id="privacy_policy_editor" name="privacy_policy" class="form-control" rows="15">{!! old('privacy_policy', $settings->privacy_policy) !!}</textarea>
                                        @error('privacy_policy')
                                            <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                        @enderror
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

@section('js')
    <script src="{{ asset('assets/admin/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            if ($("#privacy_policy_editor").length > 0) {
                tinymce.init({
                    selector: "textarea#privacy_policy_editor",
                    theme: "modern",
                    height: 500,
                    directionality: 'ltr',
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | code",
                });
            }
        });
    </script>
@endsection
