$(function(){
    $.fn.inputFilter = function(inputFilter){
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function(){
            if(inputFilter(this.value)){
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            }else if(this.hasOwnProperty("oldValue")){
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            }else{
                this.value = "";
            }
        });
    };
})

function validatePhoneLenght(phone){
    return (((((phone.attr('placeholder')).split(' ').join('')).split('-').join('')).length) == (phone.val().split(' ').join('').length));
}

function validateEmail(email){
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
