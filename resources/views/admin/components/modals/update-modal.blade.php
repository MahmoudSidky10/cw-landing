<div class="modal fade bs-example-modal-md updateStatusModal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{ __('تحديث حالة الملف الشخصي') }}</h4>
                {{--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
            </div>
            <form class=" updateForm" method="post"><input class="updateId" type="hidden" name="id">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label class="required">{{ __('أختيار الحالة') }}</label>
                            <div class="">
                                <select style="height: 40px !important;" required class="form-control" name="status">
                                    <option value="2"> الملف الشخصي مقبول</option>
                                    <option value="3"> الملف الشخصي غير كامل البيانات</option>
                                    <option value="4"> الملف الشخصي غير مكتمل الشروط</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 pt-3">
                            @includeIf('admin.components.form.add.textarea', [
                                'icon' => 'fa fa-user',
                                'label' => trans('راي الباحث'),
                                'name' => 'notes',
                                'placeholder' => trans('راي الباحث'),
                            ])
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light">{{ __('تحديث') }}
                    </button>
                    <button type="button" class="btn btn-default waves-effect"
                        data-dismiss="modal">{{ __('language.close') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
