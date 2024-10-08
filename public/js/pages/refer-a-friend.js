var phone_input = document.querySelector('#number');
phone_input_ini = intlTelInput(phone_input, {
    separateDialCode: "true",
    initialCountry: "auto",
    utilsScript: "/public/js/utils.min.js",
    geoIpLookup: function (success) { success("ae"); }
});

var ref_phone_input = document.querySelector('#ref_number');
ref_phone_input_ini = intlTelInput(ref_phone_input, {
    separateDialCode: "true",
    initialCountry: "auto",
    utilsScript: "/public/js/utils.min.js",
    geoIpLookup: function (success) { success("ae"); }
});

$(function () {
    $('#number').inputFilter(function (value) { return /^\d*$/.test(value) });
    $('#ref_number').inputFilter(function (value) { return /^\d*$/.test(value) });

    $('#form_submit').click(function () {
        if (($('#form_submit_text').text() != "Please wait...") && userValidation()) {
            GFUpdate()
            var loadingInterval = setInterval(function () {
                if ($('.gform_confirmation_message').text() != "") {
                    clearInterval(loadingInterval);
                    $('#page_form')[0].reset();
                    $('.meydan-form').hide();
                    $('.meydan-form-response').text($('.gform_confirmation_message').text());
                    $('html, body').animate({ scrollTop: $('.meydan-form-response').offset().top - 200 }, 100);
                    gtag('event', 'referafriendsubmit', {
                        'event_category': 'referafriendform',
                        'event_label': 'referafriend',
                        'value': 1
                    });
                }
            }, 100)
        }
    })
})
$('.company_block').hide();
$("input[name='company']").click(function () {
    var inputValue = $(this).attr("value");
    if (inputValue == "Yes" || inputValue == "نعم") {
        $('.company_block').show();
    }
    else {
        $('.company_block').hide();
    }
});

function userValidation() {
    let validation = true;
    $('#yname, #number, .iti--allow-dropdown, #email, #ref_name, #ref_number, #ref_email, #msg, #comapny_name, input[name=company]').removeClass('is-invalid');
    if ($('#yname').val() == "") {
        $('#yname').addClass('is-invalid');
        validation = false;
    } else {
        $('#yname').addClass('is-valid');
    }
    if ($('#number').val() == "" || !validatePhoneLenght($('#number'))) {
        $('#number').addClass('is-invalid');
        $('#number').parent().addClass('is-invalid');
        validation = false;
    } else {
        $('#number').addClass('is-valid');
        $('#number').parent().addClass('is-valid');
    }
    if (!validateEmail($('#email').val()) || $('#email').val() == "") {
        $('#email').addClass('is-invalid');
        validation = false;
    } else {
        $('#email').addClass('is-valid');
    }
    if ($('#ref_name').val() == "") {
        $('#ref_name').addClass('is-invalid');
        validation = false;
    } else {
        $('#ref_name').addClass('is-valid');
    }

    if ($('#ref_number').val() == "" || !validatePhoneLenght($('#number'))) {
        $('#ref_number_error').text("Please enter your referral number");
        $('#ref_number').addClass('is-invalid');
        $('#ref_number').parent().addClass('is-invalid');
        validation = false;
    } else {
        if ($('#ref_number').val() == $('#number').val()) {
            $('#ref_number_error').text("Referral phone number cannot be same as yours");
            $('#ref_number').addClass('is-invalid');
            $('#ref_number').parent().addClass('is-invalid');
            validation = false;
        } else {
            $('#ref_number').addClass('is-valid');
            $('#ref_number').parent().addClass('is-valid');
        }
    }

    if (!validateEmail($('#ref_email').val()) || $('#ref_email').val() == "") {
        $('#ref_email_error').text("Please enter your referral email");
        $('#ref_email').addClass('is-invalid');
        validation = false;
    } else {
        if ($('#ref_email').val() == $('#email').val()) {
            $('#ref_email_error').text("Referral email ID cannot be same as yours");
            $('#ref_email').addClass('is-invalid');
            validation = false;
        } else {
            $('#ref_email').addClass('is-valid');
        }
    }

    if ($('input[name=company]:checked', '#page_form').val() == undefined) {
        $('#setting_1').addClass('is-invalid');
        validation = false;
    } else {
        $('#setting_1').addClass('is-valid');
    }
    if ($("input[name='company']").val() == "Yes" || $("input[name='company']").val() == "نعم") {
        if ($('#comapny_name').val() == "" || $('#comapny_name').val() == "N/A") {
            $('#comapny_name').addClass('is-invalid');
            validation = false;
        } else {
            $('#comapny_name').addClass('is-valid');
        }
    }

    if ($('#msg').val() == "") {
        $('#msg').addClass('is-invalid');
        validation = false;
    } else {
        $('#msg').addClass('is-valid');
    }
    return validation;
}

function GFUpdate() {
    console.log('Sending');
    console.log($('#comapny_name').val());
    $('.form_name input').val($('#yname').val());
    $('.form_phone input').val(phone_input_ini.getNumber());
    $('.form_email input').val($('#email').val());
    $('.form_ref_name input').val($('#ref_name').val());
    $('.form_ref_phone input').val(ref_phone_input_ini.getNumber());
    $('.form_ref_email input').val($('#ref_email').val());
    //$('.form_company input').val($('input[name=company]:checked', '#page_form').val());
    $('.form_company input').val($('#comapny_name').val());
    $('.form_description input').val($('#msg').val());
    $('#gform_7').submit();
    $('#form_submit_text').text('Please wait...');
}