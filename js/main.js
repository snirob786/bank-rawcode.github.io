$(document).ready(function(){
    $(".validate-form .validate-input input").focus(function(){
        $(this).closest(".validate-input").children("label").css("top","-20px");
    });
    $(".validate-form .validate-input input").blur(function(){
        if ($(this).val()) {
            $(this).closest(".validate-input").children("label").css("top","-20px");
        }else{
            $(this).closest(".validate-input").children("label").css("top","0px");
        }
    });

    $(" #isRentPaid").focus(function(){
        $("#radio-input-label").css("top","-20px");
    });
    $(" #isRentPaid").blur(function(){
        if ($(this).val()) {
            $("#radio-input-label").css("top","-20px");
        }else{
            $("#radio-input-label").css("top","0");
        }
    });
});

$(document).ready(function(){
    $("#register").click(function(event){
        event.preventDefault();
        var fName = $("#fName").val();
        var lName = $("#lName").val();
        var Ssn = $("#Ssn").val();
        var ownerBdate = $("#ownerBdate").val();
        // var bDate = $("#ownerBdate").val();
        var register = $("#register").val();
        $(".form-message").load("validator.php", {
            fName : fName,
            lName : lName,
            Ssn : Ssn,
            ownerBdate : ownerBdate,
            // bDate: bDate,
            register : register
        });
    });
});
