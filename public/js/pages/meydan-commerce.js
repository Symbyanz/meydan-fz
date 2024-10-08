var phone_input = document.querySelector('#number');
phone_input_ini = intlTelInput(phone_input, {
    separateDialCode: "true",
    initialCountry: "auto",
    utilsScript: "/public/js/utils.min.js",
    geoIpLookup: function (success) { success("ae"); }
});

$(function () {

    $('.form_source input').val("Meydan Commerce Page");
    $('#number').inputFilter(function (value) { return /^\d*$/.test(value) });

    $('#form_submit').click(function () {
        if (($('#form_submit_text').text() != "Please wait...") && userValidation()) {
            GFUpdate();
            $('#yname_bot_form').val($('#yname').val());
            $('#number_bot_form').val($('#number').val());
            $('#email_bot_form').val($('#email').val());
            $('#country_code').val(phone_input_ini.getSelectedCountryData().iso2);
            var loadingInterval = setInterval(function () {
                if ($('.gform_confirmation_message').text() != "") {
                    clearInterval(loadingInterval);
                    $('#page_form')[0].reset();
                    Swal.fire({
                        title: 'Thank You!',
                        text: "Our team will get in touch with you soon.",
                        showConfirmButton: false,
                        allowOutsideClick: false
                    });
                    setTimeout(function () {
                        $('#bot_form').submit();
                    }, 5000)
                }
            })
        }
    });
});

function userValidation() {
    let validation = true;
    $('#yname, #number, .iti--allow-dropdown, #email').removeClass('is-invalid');
    if ($('#yname').val() == "") {
        $('#yname').addClass('is-invalid');
        validation = false;
    } else {
        $('#yname').addClass('is-valid');
    }
    if ($('#number').val() == "" || !validatePhoneLenght($('#number'))) {
        $('#number, .iti--allow-dropdown').addClass('is-invalid');
        validation = false;
    } else {
        $('#number, .iti--allow-dropdown').addClass('is-valid');
    }
    if (!validateEmail($('#email').val()) || $('#email').val() == "") {
        $('#email').addClass('is-invalid');
        validation = false;
    } else {
        $('#email').addClass('is-valid');
    }
    return validation;
}

function GFUpdate() {
    console.log('Sending');
    $('.form_name input').val($('#yname').val());
    $('.form_phone input').val(phone_input_ini.getNumber());
    $('.form_email input').val($('#email').val());
    $('#gform_12').submit();
    $('#form_submit_text').text('Please wait...');
}