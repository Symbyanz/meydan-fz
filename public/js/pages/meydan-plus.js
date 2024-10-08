var phone_input = document.querySelector('#number');
phone_input_ini = intlTelInput(phone_input, {
    separateDialCode:"true",
    initialCountry:"auto",
    utilsScript:"/public/js/utils.min.js",
    geoIpLookup:function(success){success("ae");}
});

$(function(){
    $('#number').inputFilter(function(value){return /^\d*$/.test(value)});

    $('#form_submit').click(function(){
        if(($('#form_submit_text').text() != "Please wait...") && userValidation()){
            GFUpdate()
            var loadingInterval = setInterval(function(){
                if($('.gform_confirmation_message').text() != ""){
                    clearInterval(loadingInterval);
                    $('#plus_form')[0].reset();
                    $('.meydan-form').hide();
                    $('.meydan-form-response').text($('.gform_confirmation_message').text());
                    $('html, body').animate({scrollTop:$('.meydan-form-response').offset().top-200}, 100);
                }
            }, 100)
        }
    })
})

function userValidation(){
    let validation = true;
    $('#yname, #cname,  .iti--allow-dropdown, #number, #email,  input[name=services_required]').removeClass('is-invalid');
    if($('#yname').val() == ""){
        $('#yname').addClass('is-invalid');
        validation = false;
    }else{
        $('#yname').addClass('is-valid');
    }
    if($('#cname').val() == ""){
        $('#cname').addClass('is-invalid');
        validation = false;
    }else{
        $('#cname').addClass('is-valid');
    }
    if($('#number').val() == "" || !validatePhoneLenght($('#number'))){
        $('#number, .iti--allow-dropdown').addClass('is-invalid');
        validation = false;
    }else{
        $('#number, .iti--allow-dropdown').addClass('is-valid');
    }
    if(!validateEmail($('#email').val()) || $('#email').val() == ""){
        $('#email').addClass('is-invalid');
        validation = false;
    }else{
        $('#email').addClass('is-valid');
    }
    if($('input[name=services_required]:checked', '#plus_form').val() == undefined){
        $('#something').addClass('is-invalid');
        validation = false;
    }else{
        $('#something').addClass('is-valid');
    }
    
    
    return validation;
}

function GFUpdate(){
    console.log('Sending');
    $('.form_name input').val($('#yname').val());
    $('.form_company input').val($('#cname').val());
    $('.form_phone input').val(phone_input_ini.getNumber());
    $('.form_email input').val($('#email').val());
    
    let checkboxes = document.querySelectorAll('input[name="services_required"]:checked');
        let values = [];
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
    console.log(values);
    $('.form_looking_for input').val(values);
    $('#gform_22').submit();
    $('#form_submit_text').text('Please wait...');
}