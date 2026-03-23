<div class="modal fade bs-example-modal-md confirmApplicationCashModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{__('اعتماد حالة الطلب')}}</h4>
            </div>
            <form class="confirmCashAppForm" method="post">

                <input class="confirmCashAppId" type="hidden" name="id">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <p style="font-weight: bolder ;"> المبلغ المقرر للتبرع من قبل موظف الحصر : <span
                                    class="ِapplicationHasrMoneyValue" style=" color: green"></span> ريال</p>
                        </div>
                        <div class="col-md-12">
                            <label class="required">{{__("اعتماد الطلب")}}</label>
                            <div class="">
                                <select id="applicationStatusSelectForMoneyEmployee" style="height: 40px !important;"
                                        required
                                        class="form-control" name="status">
                                    <option value="">حدد حالة الطلب</option>
                                    <option value="2"> الطلب مقبول</option>
                                    <option value="3"> الطلب غير كامل البيانات</option>
                                    <option value="4"> الطلب غير مكتمل الشروط</option>
                                </select>
                            </div>
                        </div>

                        <div class="pt-4">
                            @includeIf('admin.components.form.add.text', ['icon' => 'fa fa-user','label' => trans('تأكيد مبلغ التبرع'),'name'=>'amount', 'placeholder'=>trans('تأكيد مبلغ التبرع' ),'valid'=>trans('language.vaildation')])
                        </div>


                      {{--  <div style="display: none" id="applicationConfirmCashDiv"
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

                        <div class="col-md-12 pt-2">
                            @includeIf('admin.components.form.add.textarea', [
                              'icon' => 'fa fa-user',
                              'label' => trans('راي المدير المالي'),
                              'name' => 'notes',
                              'placeholder'=>trans('راي المدير المالي')
                          ])
                        </div>
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
