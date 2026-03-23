<div class="modal fade bs-example-modal-md confirmApplicationFinishModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{__('اعتماد حالة الطلب')}}</h4>
            </div>
            <form class="confirmFinishAppForm" method="post" enctype="multipart/form-data">

                <input class="confirmFinishAppId" type="hidden" name="id">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <label class="required">{{__("اعتماد الطلب")}}</label>
                            <div class="">
                                <select id="applicationStatusSelectForFinishEmployee" style="height: 40px !important;"
                                        required
                                        class="form-control" name="status">
                                    <option value="">حدد حالة الطلب</option>
                                    <option value="2"> الطلب مقبول</option>
                                    <option value="3"> الطلب غير كامل البيانات</option>
                                    <option value="4"> الطلب غير مكتمل الشروط</option>
                                </select>
                            </div>
                        </div>


                        <div style="display: none" id="applicationConfirmFinishDiv" class="">
                            <div class="pt-2">
                                <label class="required">{{__("ارفاق ملف الصرف ")}}</label>
                                @includeIf('admin.components.form.add.file', ['icon' => 'fa fa-check','label' => '','name'=>'finish_payment_file', 'max'=>'5'  , 'class' => "col-md-12"])
                            </div>
                        </div>

                     {{--   <div style="display: none" id="applicationEmployessDiv"
                             class="col-md-12 pt-3">
                            <div class="pt-2">
                                <label class="required">{{__("ارسال الطلب الي")}}</label>
                                <div class="">
                                    <select id="applicationStatusAssignEmployeeTypeSelect"
                                            style="height: 40px !important;"
                                            class="form-control" name="assign_employee_type">
                                        <option value="">أختر دور الموظف المسؤول</option>
                                        <option value="checker">الباحث</option>
                                        <option value="social">مدير الإيجار</option>
                                        <option value="manager">المدير التنفيذي</option>
                                        <option value="hasr">موظف الحصر</option>
                                    </select>
                                </div>
                            </div>
                        </div>--}}

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light">{{__('تحديث')}} </button>
                    <button type="button" class="btn btn-default waves-effect"
                            data-dismiss="modal">{{__('language.close')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
