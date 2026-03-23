<div class="modal fade bs-example-modal-lg confirmApplicationStatusModal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>{{ __('اعتماد الطلب - اعتماد الدفعات') }}</h4>
            </div>
            <form class="confirmAppForm" method="post">
                <input class="confirmAppId" type="hidden" name="id">
                <input type="hidden" name="application_id" id="managerModalApplicationId">
                <input type="hidden" name="status" value="2">
                @csrf
                <div class="modal-body">
                    <div class="row">

                        <!-- Payment Dates Section - shown immediately -->
                        <div id="managerPaymentDatesSection" class="col-md-12 pt-3">
                            <h5 style="font-weight: bold; margin-bottom: 15px;">
                                <i class="fa fa-calendar"></i> مواعيد الدفعات والمبالغ
                            </h5>
                            <div id="managerPaymentDatesContainer">
                                <div class="text-center p-3">
                                    <i class="fa fa-spinner fa-spin"></i> جاري تحميل مواعيد الدفعات...
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-3">
                            @includeIf('admin.components.form.add.textarea', [
                                'icon' => 'fa fa-user',
                                'label' => trans('رأي مدير الإيجارات'),
                                'name' => 'notes',
                                'placeholder' => trans('رأي مدير الإيجارات'),
                            ])
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success waves-effect waves-light">
                        <i class="fa fa-check"></i> {{ __('اعتماد الطلب') }}
                    </button>
                    <button type="button" class="btn btn-default waves-effect"
                        data-dismiss="modal">{{ __('language.close') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
