@php
    $img = fn (?string $p) => \App\Models\SiteSetting::aboutMediaUrl($p);
@endphp

                                    <hr class="my-10">

                                    <h4 class="fw-bold text-dark mb-1">About page</h4>
                                    <p class="text-muted fs-13 mb-6">Mission, Why different, Our story, Who we build, and Testimonials. Upload images or set paths (<code>assets/img/...</code> or short paths under <code>assets/img/</code>).</p>

                                    <h5 class="fw-bold text-dark mb-3">Our mission</h5>
                                    <div class="card border mb-5">
                                        <div class="card-body">
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Badge</label>
                                                <input type="text" name="about[mission][badge]" class="form-control" value="{{ old('about.mission.badge', data_get($about, 'mission.badge')) }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Title</label>
                                                <input type="text" name="about[mission][title]" class="form-control" value="{{ old('about.mission.title', data_get($about, 'mission.title')) }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Body</label>
                                                <textarea name="about[mission][body]" class="form-control" rows="4">{{ old('about.mission.body', data_get($about, 'mission.body')) }}</textarea>
                                            </div>
                                            @if (data_get($about, 'mission.image'))
                                                <div class="mb-2"><img src="{{ $img(data_get($about, 'mission.image')) }}" alt="" style="max-height:100px;border-radius:6px;"></div>
                                            @endif
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Upload hero image</label>
                                                <input type="file" name="about_mission_upload" class="form-control" accept="image/*">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Image path</label>
                                                <input type="text" name="about[mission][image]" class="form-control" value="{{ old('about.mission.image', data_get($about, 'mission.image')) }}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="small text-muted">Image alt</label>
                                                <input type="text" name="about[mission][image_alt]" class="form-control" value="{{ old('about.mission.image_alt', data_get($about, 'mission.image_alt')) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="fw-bold text-dark mb-3">Why Cyberwatch360 is different</h5>
                                    <div class="card border mb-5">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Badge</label>
                                                    <input type="text" name="about[why_different][badge]" class="form-control" value="{{ old('about.why_different.badge', data_get($about, 'why_different.badge')) }}">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Title</label>
                                                    <input type="text" name="about[why_different][title]" class="form-control" value="{{ old('about.why_different.title', data_get($about, 'why_different.title')) }}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Mobile image upload</label>
                                                <input type="file" name="about_why_mobile_upload" class="form-control" accept="image/*">
                                                <input type="text" name="about[why_different][mobile_image]" class="form-control mt-2" value="{{ old('about.why_different.mobile_image', data_get($about, 'why_different.mobile_image')) }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Mobile alt</label>
                                                <input type="text" name="about[why_different][mobile_alt]" class="form-control" value="{{ old('about.why_different.mobile_alt', data_get($about, 'why_different.mobile_alt')) }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Desktop image A upload</label>
                                                <input type="file" name="about_why_img_a_upload" class="form-control" accept="image/*">
                                                <input type="text" name="about[why_different][img_a]" class="form-control mt-2" value="{{ old('about.why_different.img_a', data_get($about, 'why_different.img_a')) }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Image A alt</label>
                                                <input type="text" name="about[why_different][img_a_alt]" class="form-control" value="{{ old('about.why_different.img_a_alt', data_get($about, 'why_different.img_a_alt')) }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Desktop image B upload</label>
                                                <input type="file" name="about_why_img_b_upload" class="form-control" accept="image/*">
                                                <input type="text" name="about[why_different][img_b]" class="form-control mt-2" value="{{ old('about.why_different.img_b', data_get($about, 'why_different.img_b')) }}">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="small text-muted">Image B alt</label>
                                                <input type="text" name="about[why_different][img_b_alt]" class="form-control" value="{{ old('about.why_different.img_b_alt', data_get($about, 'why_different.img_b_alt')) }}">
                                            </div>
                                            @foreach (range(0, 3) as $wi)
                                                <div class="border rounded p-3 mb-3">
                                                    <strong class="small text-muted">Feature {{ $wi + 1 }}</strong>
                                                    <div class="form-group mb-2 mt-2">
                                                        <label class="small text-muted">Icon (Iconify)</label>
                                                        <input type="text" name="about[why_different][items][{{ $wi }}][icon]" class="form-control" value="{{ old('about.why_different.items.'.$wi.'.icon', data_get($about, 'why_different.items.'.$wi.'.icon')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Title</label>
                                                        <input type="text" name="about[why_different][items][{{ $wi }}][title]" class="form-control" value="{{ old('about.why_different.items.'.$wi.'.title', data_get($about, 'why_different.items.'.$wi.'.title')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Body</label>
                                                        <textarea name="about[why_different][items][{{ $wi }}][body]" class="form-control" rows="2">{{ old('about.why_different.items.'.$wi.'.body', data_get($about, 'why_different.items.'.$wi.'.body')) }}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <h5 class="fw-bold text-dark mb-3">Our story</h5>
                                    <div class="card border mb-5">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Badge</label>
                                                    <input type="text" name="about[story][badge]" class="form-control" value="{{ old('about.story.badge', data_get($about, 'story.badge')) }}">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Title</label>
                                                    <input type="text" name="about[story][title]" class="form-control" value="{{ old('about.story.title', data_get($about, 'story.title')) }}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Intro</label>
                                                <textarea name="about[story][intro]" class="form-control" rows="3">{{ old('about.story.intro', data_get($about, 'story.intro')) }}</textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small text-muted">Side image upload</label>
                                                <input type="file" name="about_story_side_upload" class="form-control" accept="image/*">
                                                <input type="text" name="about[story][side_image]" class="form-control mt-2" value="{{ old('about.story.side_image', data_get($about, 'story.side_image')) }}">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="small text-muted">Side image alt</label>
                                                <input type="text" name="about[story][side_alt]" class="form-control" value="{{ old('about.story.side_alt', data_get($about, 'story.side_alt')) }}">
                                            </div>
                                            @foreach (range(0, 3) as $ti)
                                                <div class="border rounded p-3 mb-3">
                                                    <strong class="small text-muted">Timeline {{ $ti + 1 }}</strong>
                                                    <div class="form-group mb-2 mt-2">
                                                        <label class="small text-muted">Left label</label>
                                                        <input type="text" name="about[story][timeline][{{ $ti }}][left]" class="form-control" value="{{ old('about.story.timeline.'.$ti.'.left', data_get($about, 'story.timeline.'.$ti.'.left')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Right title</label>
                                                        <input type="text" name="about[story][timeline][{{ $ti }}][right_title]" class="form-control" value="{{ old('about.story.timeline.'.$ti.'.right_title', data_get($about, 'story.timeline.'.$ti.'.right_title')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Right body</label>
                                                        <textarea name="about[story][timeline][{{ $ti }}][right_body]" class="form-control" rows="2">{{ old('about.story.timeline.'.$ti.'.right_body', data_get($about, 'story.timeline.'.$ti.'.right_body')) }}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @foreach (range(0, 2) as $hi)
                                                <div class="border rounded p-3 mb-3">
                                                    <strong class="small text-muted">Highlight {{ $hi + 1 }}</strong>
                                                    <div class="form-group mb-2 mt-2">
                                                        <label class="small text-muted">Value</label>
                                                        <input type="text" name="about[story][highlights][{{ $hi }}][value]" class="form-control" value="{{ old('about.story.highlights.'.$hi.'.value', data_get($about, 'story.highlights.'.$hi.'.value')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Label</label>
                                                        <input type="text" name="about[story][highlights][{{ $hi }}][label]" class="form-control" value="{{ old('about.story.highlights.'.$hi.'.label', data_get($about, 'story.highlights.'.$hi.'.label')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Icon</label>
                                                        <input type="text" name="about[story][highlights][{{ $hi }}][icon]" class="form-control" value="{{ old('about.story.highlights.'.$hi.'.icon', data_get($about, 'story.highlights.'.$hi.'.icon')) }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <h5 class="fw-bold text-dark mb-3">Who we build for</h5>
                                    <div class="card border mb-5">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Badge</label>
                                                    <input type="text" name="about[who_we_build][badge]" class="form-control" value="{{ old('about.who_we_build.badge', data_get($about, 'who_we_build.badge')) }}">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Title</label>
                                                    <input type="text" name="about[who_we_build][title]" class="form-control" value="{{ old('about.who_we_build.title', data_get($about, 'who_we_build.title')) }}">
                                                </div>
                                            </div>
                                            @foreach (range(0, 3) as $ci)
                                                <div class="border rounded p-3 mb-3">
                                                    <strong class="small text-muted">Card {{ $ci + 1 }}</strong>
                                                    <div class="form-group mb-2 mt-2">
                                                        <label class="small text-muted">Photo upload</label>
                                                        <input type="file" name="about_who_{{ $ci }}_upload" class="form-control" accept="image/*">
                                                        <input type="text" name="about[who_we_build][cards][{{ $ci }}][image]" class="form-control mt-2" value="{{ old('about.who_we_build.cards.'.$ci.'.image', data_get($about, 'who_we_build.cards.'.$ci.'.image')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Image alt</label>
                                                        <input type="text" name="about[who_we_build][cards][{{ $ci }}][image_alt]" class="form-control" value="{{ old('about.who_we_build.cards.'.$ci.'.image_alt', data_get($about, 'who_we_build.cards.'.$ci.'.image_alt')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Heading</label>
                                                        <input type="text" name="about[who_we_build][cards][{{ $ci }}][heading]" class="form-control" value="{{ old('about.who_we_build.cards.'.$ci.'.heading', data_get($about, 'who_we_build.cards.'.$ci.'.heading')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Body</label>
                                                        <textarea name="about[who_we_build][cards][{{ $ci }}][body]" class="form-control" rows="2">{{ old('about.who_we_build.cards.'.$ci.'.body', data_get($about, 'who_we_build.cards.'.$ci.'.body')) }}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <h5 class="fw-bold text-dark mb-3">What security leaders are solving (testimonials)</h5>
                                    <div class="card border mb-5">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Badge</label>
                                                    <input type="text" name="about[testimonials][badge]" class="form-control" value="{{ old('about.testimonials.badge', data_get($about, 'testimonials.badge')) }}">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label class="small text-muted">Title</label>
                                                    <input type="text" name="about[testimonials][title]" class="form-control" value="{{ old('about.testimonials.title', data_get($about, 'testimonials.title')) }}">
                                                </div>
                                            </div>
                                            <p class="fw-bold small mb-2">Slider row 1</p>
                                            @foreach (range(0, 3) as $s1)
                                                <div class="border rounded p-3 mb-3">
                                                    <strong class="small text-muted">Slide {{ $s1 + 1 }}</strong>
                                                    <div class="form-group mb-2 mt-2">
                                                        <label class="small text-muted">Avatar upload</label>
                                                        <input type="file" name="about_t1_{{ $s1 }}_upload" class="form-control" accept="image/*">
                                                        <input type="text" name="about[testimonials][slider1][{{ $s1 }}][img]" class="form-control mt-2" value="{{ old('about.testimonials.slider1.'.$s1.'.img', data_get($about, 'testimonials.slider1.'.$s1.'.img')) }}" placeholder="testimonial-avatars/1.jpg">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Name</label>
                                                        <input type="text" name="about[testimonials][slider1][{{ $s1 }}][name]" class="form-control" value="{{ old('about.testimonials.slider1.'.$s1.'.name', data_get($about, 'testimonials.slider1.'.$s1.'.name')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Role</label>
                                                        <input type="text" name="about[testimonials][slider1][{{ $s1 }}][role]" class="form-control" value="{{ old('about.testimonials.slider1.'.$s1.'.role', data_get($about, 'testimonials.slider1.'.$s1.'.role')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Quote</label>
                                                        <textarea name="about[testimonials][slider1][{{ $s1 }}][quote]" class="form-control" rows="2">{{ old('about.testimonials.slider1.'.$s1.'.quote', data_get($about, 'testimonials.slider1.'.$s1.'.quote')) }}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <p class="fw-bold small mb-2">Slider row 2</p>
                                            @foreach (range(0, 3) as $s2)
                                                <div class="border rounded p-3 mb-3">
                                                    <strong class="small text-muted">Slide {{ $s2 + 1 }}</strong>
                                                    <div class="form-group mb-2 mt-2">
                                                        <label class="small text-muted">Avatar upload</label>
                                                        <input type="file" name="about_t2_{{ $s2 }}_upload" class="form-control" accept="image/*">
                                                        <input type="text" name="about[testimonials][slider2][{{ $s2 }}][img]" class="form-control mt-2" value="{{ old('about.testimonials.slider2.'.$s2.'.img', data_get($about, 'testimonials.slider2.'.$s2.'.img')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Name</label>
                                                        <input type="text" name="about[testimonials][slider2][{{ $s2 }}][name]" class="form-control" value="{{ old('about.testimonials.slider2.'.$s2.'.name', data_get($about, 'testimonials.slider2.'.$s2.'.name')) }}">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label class="small text-muted">Role</label>
                                                        <input type="text" name="about[testimonials][slider2][{{ $s2 }}][role]" class="form-control" value="{{ old('about.testimonials.slider2.'.$s2.'.role', data_get($about, 'testimonials.slider2.'.$s2.'.role')) }}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label class="small text-muted">Quote</label>
                                                        <textarea name="about[testimonials][slider2][{{ $s2 }}][quote]" class="form-control" rows="2">{{ old('about.testimonials.slider2.'.$s2.'.quote', data_get($about, 'testimonials.slider2.'.$s2.'.quote')) }}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
