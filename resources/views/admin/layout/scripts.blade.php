<script src="{{ asset('assets/admin/') }}/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('assets/admin/') }}/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{ asset('assets/admin/') }}/js/scripts.bundle.js"></script>
<script src="{{ asset('assets/admin/') }}/js/dropify.min.js"></script>
<script src="{{ asset('assets/admin/') }}/js/pages/widgets.js"></script>
<script src="{{ asset('assets/admin/') }}/js/lightbox.js"></script>
<script src="{{ asset('assets/admin/') }}/js/open-delete-modal.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwxAJHAPhgfrxa6vZHBkvqPbIMqxJCvVw&libraries=places">
</script>
<script src="{{ asset('assets/admin/') }}/js/dropify.min.js"></script>

<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("هل تريد الغاء تحميل الصورة ؟");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('تم الغاء عمليه تحميل الصوره .');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('هناك خطاء اثناء تحميل الصوره');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<script>
    $(".tap_n_1").click(function() {
        localStorage.setItem("sideTapNum", 1);
        $("#kt_body").removeClass("aside-minimize");
    });

    $(".tap_n_2").click(function() {
        localStorage.setItem("sideTapNum", 2);
        $("#kt_body").removeClass("aside-minimize");
    });

    // get avtive side tap :-
    var st = localStorage.getItem("sideTapNum");
    if (st == 1) {
        $(".tap_nav_1").addClass("active")
        $(".tap_nav_2").removeClass("active ")
        $(".tap_cont_1").addClass("active show")
        $(".tap_cont_2").removeClass("active show")
    } else if (st == 2) {
        $(".tap_nav_2").addClass("active ")
        $(".tap_nav_1").removeClass("active ")

        $(".tap_cont_2").addClass("active show")
        $(".tap_cont_1").removeClass("active show")
    } else {
        localStorage.setItem("sideTapNum", 1);
        $(".tap_nav_1").addClass("active")
        $(".tap_nav_2").removeClass("active ")
        $(".tap_cont_1").addClass("active show")
        $(".tap_cont_2").removeClass("active show")
    }
</script>


<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })


    });
</script>


<script>
    $('.select2').select2();
</script>
<script>
    $(document).on('click', '.updateStatusBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".updateMessage").text(message);
        $(".updateId").val(id);
        $(".updateForm").attr('action', action);
    });

    $(document).on('click', '.updateApplicationStatusBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".updateAppMessage").text(message);
        $(".updateAppId").val(id);
        $(".updateAppForm").attr('action', action);
    })

    $(document).on('click', '.updateSocialApplicationStatusBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".updateSocialAppMessage").text(message);
        $(".updateSocialAppId").val(id);
        $("#socialModalApplicationId").val(id);
        $(".updateSocialAppForm").attr('action', action);

        // Reset the modal state
        $('#applicationStatusSelectForSocial').val('');
        $('#paymentDatesSection').hide();
        $('#paymentDatesContainer').html(
            '<div class="text-center p-3"><i class="fa fa-spinner fa-spin"></i> جاري تحميل مواعيد الدفعات...</div>'
        );
    });

    $(document).on('click', '.confirmApplicationStatusBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".confirmAppMessage").text(message);
        $(".confirmAppId").val(id);
        $(".confirmAppForm").attr('action', action);
        $('#managerModalApplicationId').val(id);

        // Reset and show payment dates section
        $('#applicationStatusSelectForManager').val('');
        $('#managerPaymentDatesSection').show();
        $('#managerPaymentDatesContainer').html(
            '<div class="text-center p-3"><i class="fa fa-spinner fa-spin"></i> جاري تحميل مواعيد الدفعات...</div>'
        );

        // Load payment dates immediately when modal opens
        if (id) {
            $.ajax({
                url: '/admin/applications/' + id + '/paymentDates',
                type: 'GET',
                success: function(response) {
                    if (response.success && response.paymentDates.length > 0) {
                        var html = '<table class="table table-bordered table-striped">';
                        html += '<thead><tr>';
                        html += '<th style="width: 25%; text-align: center;">رقم الدفعة</th>';
                        html += '<th style="width: 35%; text-align: center;">تاريخ الاستحقاق</th>';
                        html += '<th style="width: 40%; text-align: center;">المبلغ</th>';
                        html += '</tr></thead><tbody>';

                        response.paymentDates.forEach(function(payment) {
                            html += '<tr>';
                            html +=
                                '<td style="text-align: center; font-weight: bold;">الدفعة ' +
                                payment.payment_number + '</td>';
                            html += '<td style="text-align: center; font-weight: bold;">' +
                                payment.due_date + '</td>';
                            html += '<td style="text-align: center;">';
                            html +=
                                '<input type="number" step="0.01" min="0" class="form-control" ';
                            html += 'name="payment_amounts[' + payment.id + ']" ';
                            html += 'value="' + (payment.amount || '') + '" ';
                            html +=
                            'placeholder="ادخل المبلغ" style="text-align: center;">';
                            html += '</td>';
                            html += '</tr>';
                        });

                        html += '</tbody></table>';
                        $('#managerPaymentDatesContainer').html(html);
                    } else {
                        $('#managerPaymentDatesContainer').html(
                            '<div class="alert alert-warning text-center">لا توجد مواعيد دفعات لهذا الطلب</div>'
                        );
                    }
                },
                error: function() {
                    $('#managerPaymentDatesContainer').html(
                        '<div class="alert alert-danger text-center">حدث خطأ أثناء تحميل مواعيد الدفعات</div>'
                    );
                }
            });
        }
    });

    $(document).on('click', '.confirmApplicationMoneyAmountBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".ِapplicationManagerMoneyValue").text($(this).data('amount'));
        $(".hasrMoneyConfirmInputValue").val($(this).data('amount'));
        $(".confirmMoneyAppMessage").text(message);
        $(".confirmMoneyAppId").val(id);
        $(".confirmMoneyAppForm").attr('action', action);
    })

    $(document).on('click', '.confirmApplicationCashBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".ِapplicationHasrMoneyValue").text($(this).data('amount'));
        $(".confirmCashAppMessage").text(message);
        $(".confirmCashAppId").val(id);
        $(".confirmCashAppForm").attr('action', action);
    });

    $(document).on('click', '.confirmApplicationFinishBtn', function() {
        id = $(this).data('id');
        action = $(this).data('action');
        message = $(this).data('message');
        $(".confirmFinishAppMessage").text(message);
        $(".confirmFinishAppId").val(id);
        $(".confirmFinishAppForm").attr('action', action);
    });


    $("#applicationStatusSelect").on('change', function() {
        var status = $(this).val();
        if (status == 2) {
            // accepted application so open

            // 1- send it for ( manager or money )
            $('#applicationStatusAssignEmployeeTypeSelectDiv').show();
            $('#applicationStatusAssignEmployeeTypeSelect').attr("required", "required");

            // 2- open application emergency type

        } else {
            $('#applicationStatusAssignEmployeeTypeSelectDiv').hide();
            $('#applicationStatusAssignEmployeeTypeSelect').attr("required", "");
        }
    });


    $("#applicationStatusSelectForSocial").on('change', function() {
        var status = $(this).val();
        if (status == 2) {
            // accepted application - show payment dates section
            $('#applicationStatusAssignEmployeeTypeSelectDivForSocial').show();
            // HIDDEN: Payment dates section - employee can only accept, not enter amounts
            // $('#paymentDatesSection').show();

            // HIDDEN: Load payment dates via AJAX
            // var applicationId = $('#socialModalApplicationId').val();
            // if (applicationId) {
            //     $.ajax({
            //         url: '/admin/applications/' + applicationId + '/paymentDates',
            //         type: 'GET',
            //         success: function(response) {
            //             if (response.success && response.paymentDates.length > 0) {
            //                 var html = '<table class="table table-bordered table-striped">';
            //                 html += '<thead><tr>';
            //                 html += '<th style="width: 25%; text-align: center;">رقم الدفعة</th>';
            //                 html +=
            //                     '<th style="width: 35%; text-align: center;">تاريخ الاستحقاق</th>';
            //                 html += '<th style="width: 40%; text-align: center;">المبلغ</th>';
            //                 html += '</tr></thead><tbody>';

            //                 response.paymentDates.forEach(function(payment) {
            //                     html += '<tr>';
            //                     html +=
            //                         '<td style="text-align: center; font-weight: bold;">الدفعة ' +
            //                         payment.payment_number + '</td>';
            //                     html +=
            //                         '<td style="text-align: center; font-weight: bold;">' +
            //                         payment.due_date + '</td>';
            //                     html += '<td style="text-align: center;">';
            //                     html +=
            //                         '<input type="number" step="0.01" min="0" class="form-control" ';
            //                     html += 'name="payment_amounts[' + payment.id + ']" ';
            //                     html += 'value="' + (payment.amount || '') + '" ';
            //                     html +=
            //                         'placeholder="ادخل المبلغ" style="text-align: center;">';
            //                     html += '</td>';
            //                     html += '</tr>';
            //                 });

            //                 html += '</tbody></table>';
            //                 $('#paymentDatesContainer').html(html);
            //             } else {
            //                 $('#paymentDatesContainer').html(
            //                     '<div class="alert alert-warning text-center">لا توجد مواعيد دفعات لهذا الطلب</div>'
            //                 );
            //             }
            //         },
            //         error: function() {
            //             $('#paymentDatesContainer').html(
            //                 '<div class="alert alert-danger text-center">حدث خطأ أثناء تحميل مواعيد الدفعات</div>'
            //             );
            //         }
            //     });
            // }
        } else {
            $('#applicationStatusAssignEmployeeTypeSelectDivForSocial').hide();
            // $('#paymentDatesSection').hide();
        }
    });

    $("#applicationStatusSelectForManager").on('change', function() {
        var status = $(this).val();
        if (status == 2) {
            // accepted application - show payment dates section
            $('#applicationMoneyDiv').hide();
            $('#managerPaymentDatesSection').show();

            // Load payment dates via AJAX
            var applicationId = $('#managerModalApplicationId').val();
            if (applicationId) {
                $.ajax({
                    url: '/admin/applications/' + applicationId + '/paymentDates',
                    type: 'GET',
                    success: function(response) {
                        if (response.success && response.paymentDates.length > 0) {
                            var html = '<table class="table table-bordered table-striped">';
                            html += '<thead><tr>';
                            html += '<th style="width: 25%; text-align: center;">رقم الدفعة</th>';
                            html +=
                                '<th style="width: 35%; text-align: center;">تاريخ الاستحقاق</th>';
                            html += '<th style="width: 40%; text-align: center;">المبلغ</th>';
                            html += '</tr></thead><tbody>';

                            response.paymentDates.forEach(function(payment) {
                                html += '<tr>';
                                html +=
                                    '<td style="text-align: center; font-weight: bold;">الدفعة ' +
                                    payment.payment_number + '</td>';
                                html +=
                                    '<td style="text-align: center; font-weight: bold;">' +
                                    payment.due_date + '</td>';
                                html += '<td style="text-align: center;">';
                                html +=
                                    '<input type="number" step="0.01" min="0" class="form-control" ';
                                html += 'name="payment_amounts[' + payment.id + ']" ';
                                html += 'value="' + (payment.amount || '') + '" ';
                                html +=
                                    'placeholder="ادخل المبلغ" style="text-align: center;">';
                                html += '</td>';
                                html += '</tr>';
                            });

                            html += '</tbody></table>';
                            $('#managerPaymentDatesContainer').html(html);
                        } else {
                            $('#managerPaymentDatesContainer').html(
                                '<div class="alert alert-warning text-center">لا توجد مواعيد دفعات لهذا الطلب</div>'
                            );
                        }
                    },
                    error: function() {
                        $('#managerPaymentDatesContainer').html(
                            '<div class="alert alert-danger text-center">حدث خطأ أثناء تحميل مواعيد الدفعات</div>'
                        );
                    }
                });
            }
        } else {
            $('#applicationMoneyDiv').hide();
            $('#managerPaymentDatesSection').hide();
        }
    });

    $("#applicationStatusSelectForHasrEmployee").on('change', function() {
        var status = $(this).val();
        if (status == 2) {
            // accepted application so open
            $('#applicationConfirmMoneyDiv').show();
        } else {
            $('#applicationConfirmMoneyDiv').hide();
        }
    });


    $("#applicationStatusSelectForMoneyEmployee").on('change', function() {
        var status = $(this).val();
        if (status != 2) {
            // accepted application so open
            $('#applicationConfirmCashDiv').show();
        } else {
            $('#applicationConfirmCashDiv').hide();
        }
    });


    $("#applicationStatusSelectForFinishEmployee").on('change', function() {
        var status = $(this).val();
        if (status == 2) {
            // accepted application so open
            $('#applicationConfirmFinishDiv').show();
            $('#applicationEmployessDiv').hide();
        } else {
            $('#applicationConfirmFinishDiv').hide();
            $('#applicationEmployessDiv').show();
        }
    });

    $("input[name=bank_account]").on("keyup", function() {
        var bankNumber = $("input[name=bank_account]").val();
        if (bankNumber.length > 22) {
            bankNumber = bankNumber.substring(0, 22)
            $("input[name=bank_account]").val(bankNumber)
        }
    });

    $("input[name=bank_iban]").on("keyup", function() {
        var iban = $("input[name=bank_iban]").val();
        var newVal = iban.replace(/\s+/g, '');
        $("input[name=bank_iban]").val(newVal);
        var bankNumber = newVal.replace(/\s+/g, '');
        if (bankNumber.length > 22) {
            bankNumber = bankNumber.substring(0, 22)
            $("input[name=bank_iban]").val(bankNumber)
        } else if (bankNumber.length < 22) {
            $(".iban_number_error").text("لابد من ادخال 22 حرف");
        } else {
            $(".iban_number_error").text("");
        }
    });

    $("input[name=iban_number]").on("keyup", function() {
        var bankNumber = $("input[name=iban_number]").val();
        if (bankNumber.length > 22) {
            bankNumber = bankNumber.substring(0, 22)
            $("input[name=iban_number]").val(bankNumber)
        }
    });

    $("#application_summary").on('keyup', function() {
        var application_summary = $("#application_summary").val()
        if (application_summary.length > 120) {
            $("#application_summary").val(application_summary.substring(0, 120))
            $("#application_summary_error").html("يجب الا تزيد عن 120 حرف")
        } else {
            $("#application_summary_error").html("");
        }
    });
</script>

@yield('js')
