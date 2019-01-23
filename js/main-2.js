
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input').each(function(){
        $(this).on('submit', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    // ====================================================================================
    var inputName = $('.validate-input .inputName');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<inputName.length; i++) {
            if(validate(inputName[i]) == false){
                showValidate(inputName[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .inputName').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (inputName) {
        if($(inputName).attr('type') == 'text' || $(inputName).attr('name') == 'Fname' || $(inputName).attr('name') == 'Lname') {
            if($(inputName).val().trim().match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/) == null) {
                return false;
            }
        }
        else {
            if($(inputName).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(inputName) {
        var thisAlert = $(inputName).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(inputName) {
        var thisAlert = $(inputName).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    // ================================= SSN ===================================================
    var inputSsn = $('.validate-input .inputSsn');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<inputSsn.length; i++) {
            if(validate(inputSsn[i]) == false){
                showValidate(inputSsn[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .inputSsn').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (inputSsn) {
        if($(inputSsn).attr('type') == 'text' || $(inputSsn).attr('name') == 'Fname' || $(inputSsn).attr('name') == 'Lname') {
            if($(inputSsn).val().trim().match(/^([1-9])(?!\1{2}-\1{2}-\1{4})[1-9]{2}-[1-9]{2}-[1-9]{4}/) == null) {
                return false;
            }
        }
        else {
            if($(inputSsn).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(inputSsn) {
        var thisAlert = $(inputSsn).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(inputSsn) {
        var thisAlert = $(inputSsn).parent();

        $(thisAlert).removeClass('alert-validate');
    }


    // =============================== SSN Ends =====================================================

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
   /*============================ Date Picker ===========================*/
   $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    todayHighlight: true,
    startDate: '-3d',
    endDate: '+0d',
    defaultViewDate: today,
    useCurrent: false
    });
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
        
    });


})(jQuery);