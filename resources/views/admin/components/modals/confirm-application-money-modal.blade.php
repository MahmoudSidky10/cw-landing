<div class="modal fade bs-example-modal-md confirmApplicationMoneyAmountModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{__('اعتماد حالة الطلب')}}</h4>
            </div>
            <form class="confirmMoneyAppForm" method="post"><input class="confirmMoneyAppId" type="hidden" name="id">
                @csrf
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <p style="font-weight: bolder ;"> المبلغ المقرر للتبرع من قبل المدير التنفيذي : <span
                                        class="ِapplicationManagerMoneyValue" style=" color: green"></span> ريال</p>
                        </div>
                        <div class="col-md-12">
                            <label class="required">{{__("اعتماد الطلب")}}</label>
                            <div class="">
                                <select id="applicationStatusSelectForHasrEmployee" style="height: 40px !important;"
                                        required
                                        class="form-control" name="status">
                                    <option value="">حدد حالة الطلب</option>
                                    <option value="2"> الطلب مقبول</option>
                                    <option value="3"> الطلب غير كامل البيانات</option>
                                    <option value="4"> الطلب غير مكتمل الشروط</option>
                                </select>
                            </div>
                        </div>

                        <div style="display: none" id="applicationConfirmMoneyDiv" class="col-md-12 pt-3">

                            <div class="pt-2">
                                <label class="required">{{__("اختار موظف المالي")}}</label>
                                <div class="">
                                    <select id="" style="height: 40px !important;" required class="form-control"
                                            name="money_employment_id">
                                        <option value="">اختار موظف المالي</option>
                                        @foreach(\App\Models\User::where("employee_type",'money')->get() as $employee)
                                            <option value="{{$employee->id}}"> {{$employee->user_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="pt-4">
                                @includeIf('admin.components.form.add.text', ['classInput' => 'hasrMoneyConfirmInputValue','icon' => 'fa fa-user','label' => trans('تأكيد مبلغ التبرع'),'name'=>'amount', 'placeholder'=>trans('تأكيد مبلغ التبرع' ),'valid'=>trans('language.vaildation')])
                            </div>
                        </div>

                        <div class="col-md-12 pt-2">
                            @includeIf('admin.components.form.add.textarea', [
                              'icon' => 'fa fa-user',
                              'label' => trans('راي موظف الحصر'),
                              'name' => 'notes',
                              'placeholder'=>trans('راي موظف الحصر')
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
