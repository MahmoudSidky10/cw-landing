<div class="modal fade bs-example-modal-lg updateSocialApplicationStatusModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{__('تحديث حالة الطلب')}}</h4>
            </div>
            <form class="updateSocialAppForm" method="post">
                <input class="updateSocialAppId" type="hidden" name="id">
                <input type="hidden" name="application_id" id="socialModalApplicationId">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="required">{{__("اعتماد الطلب")}}</label>
                            <div class="">
                                <select id="applicationStatusSelectForSocial" style="height: 40px !important;" required
                                        class="form-control" name="status">
                                    <option value="">حدد حالة الطلب</option>
                                    <option value="2"> الطلب مقبول</option>
                                    <option value="3"> الطلب غير كامل البيانات</option>
                                    <option value="4"> الطلب غير مكتمل الشروط</option>
                                </select>
                            </div>
                        </div>

                        <!-- HIDDEN: Payment Dates Section - Employee can only accept, not enter amounts -->
                        {{-- <div id="paymentDatesSection" class="col-md-12 pt-3" style="display: none;">
                            <hr>
                            <h5 style="font-weight: bold; margin-bottom: 15px;">
                                <i class="fa fa-calendar"></i> مواعيد الدفعات والمبالغ
                            </h5>
                            <div id="paymentDatesContainer">
                                <div class="text-center p-3">
                                    <i class="fa fa-spinner fa-spin"></i> جاري تحميل مواعيد الدفعات...
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-12 pt-2">
                            @includeIf('admin.components.form.add.textarea', [
                              'icon' => 'fa fa-user',
                              'label' => trans('رأي مدير الإيجار'),
                              'name' => 'social_note',
                              'placeholder'=>trans('رأي مدير الإيجار')
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
