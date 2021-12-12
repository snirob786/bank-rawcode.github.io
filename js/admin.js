function adminlogin(){
    var form = $('#adminLogin');
    var text = $('#admin-login #test');
    var jsondata = getFormData(form);
    console.log(jsondata);

    $(this).submit(function(e){
        e.preventDefault();
    });

    $.ajax({
        url: "../includes/auth-admin.php",
        method: "POST",
        data: jsondata,
        success: function (data) {
            // text.html(data);
            // console.log(data);
            var e = JSON.parse(data);
            console.log(e);

            if(e.type === 'success'){
                window.location.replace("/admin-dashboard");

            }else{
                console.log('error');
                text.addClass('red-text');
                text.css('display','block');


                text.html(e.message);
                setTimeout(function () {
                    text.hide('slow');
                },5000)
            }


        },

    });
}
