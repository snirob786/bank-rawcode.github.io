function checkUserDetails() {
    var form = $('#check_user_details');
    var text = $('#user-detail #test');
    form.submit(function (e) {
        e.preventDefault();
    });
    var jsondata = getFormData(form);

    $.ajax({
        url: "../includes/auth.php",
        method: "POST",
        data: jsondata,
        success: function (data) {
            // text.html(data);
            // console.log(data);
            var e = JSON.parse(data);
            console.log(e.success);
            if(e.success === 'inserted'){
                window.location.replace("/user-update");
                // $('#user-detail').addClass('displayNone');
                // $('#user-detail-update').removeClass('displayNone');
            } else {
                if (e.success === 'error'){
                    text.addClass('red-text');
                    text.css('display','block');
                }
                text.html(e.message);
                setTimeout(function () {
                    text.hide('slow');
                },5000)
            }


        },

    });

}


function getFormData(form){
    var unindexed_array = form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}


function submit_input() {
    var form = $('#submitinput');
    form.submit(function (e) {
        e.preventDefault();
    });
    var jsondata = getFormData(form);
    // console.log(jsondata);

    update_data(jsondata);
    update_dependant(jsondata);


}


function update_input() {
    var form = $('#updateInput');
    form.submit(function (e) {
        e.preventDefault();
    });
    var jsondata = getFormData(form);
    // console.log(jsondata);
    update_data(jsondata);
    update_dependant(jsondata);
}



function update_data(jsonData) {
    var text = $('#test');


    if ($('#consentConf').is(":checked"))
    {
        $.ajax({
            url: "../includes/auth-update.php",
            method: "POST",
            data: jsonData,
            success: function (data) {
                var e = JSON.parse(data);

                if(e.success === 'updated'){
                    text.addClass('indigo-text');
                    text.css('display','block');
                    window.location.hash = '#heading';
                } else {
                    if (e.success === 'error'){
                        text.addClass('red-text');
                        text.css('display','block');
                    }
                    text.html(e.message);
                    setTimeout(function () {
                        text.hide('slow');
                    },5000)
                }

                text.html(e.message);
                setTimeout(function () {
                    text.hide('slow');
                    // goBack();
                },5000);


            },
        });
    } else{
        window.location.hash = '#heading';
        text.addClass('red-text');
        text.css('display','block');
        text.html("Taxpayer consent is mandatory");
        setTimeout(function () {
            text.hide('slow');
        },5000)
    }



}

function goBack() {
    window.history.back();
}

function update_dependant(jsonData) {
    var counter = parseInt($('#depCount').val());
    // console.log(jsonData);
    // var i;
    //
    // for (i=1;i<=counter;i++){
    //     var a = jsonData['depfullstudent'+i];
    //     console.log("data number "+i+" is: "+a);
    // }

    $.ajax({
        url: "../includes/auth-dependant.php",
        method: "POST",
        data: {
            data: jsonData,
            counter: counter
        },
        success: function (data) {
            // console.log("Data is: "+data);
            // var e = JSON.parse(data);



            // if(e.success === 'updated'){
            //     text.addClass('indigo-text');
            //     text.css('display','block');
            //     window.location.hash = '#heading';
            // } else {
            //     if (e.success === 'error'){
            //         text.addClass('red-text');
            //         text.css('display','block');
            //     }
            //     text.html(e.message);
            //     setTimeout(function () {
            //         text.hide('slow');
            //     },5000)
            // }
            //
            // text.html(e.message);
            // setTimeout(function () {
            //     text.hide('slow');
            //     // goBack();
            // },5000);


        },
    });

}

function allUserTab() {
    $("#allUserTab a").addClass('active');
    $("#addNewUserTab a").removeClass('active');
    $("#alluser").removeClass('displayNone');
    $(".all_user_display").removeClass('displayNone');
    $("#adduser").addClass('displayNone');
    $(".new_user_display").addClass('displayNone');
}

function addNewUserTab() {
    $("#allUserTab a").removeClass('active');
    $("#addNewUserTab a").addClass('active');
    $("#alluser").addClass('displayNone');
    $(".new_user_display").removeClass('displayNone');
    $("#adduser").removeClass('displayNone');
    $(".all_user_display").addClass('displayNone');
}

function add_new_user() {
    var form = $('#submitNewUser');
    var text = $('#new_user_text');
    form.submit(function (e) {
        e.preventDefault();
    });
    var jsonData = getFormData(form);
    console.log(jsonData);

    $.ajax({
        url: "../includes/auth_add_user.php",
        method: "POST",
        data: jsonData,
        success: function (data) {
            console.log(data);
            var e = JSON.parse(data);
            if(e.success === 'inserted'){
                text.addClass('indigo-text');
                text.css('display','block');
            } else {
                if (e.success === 'error'){
                    text.addClass('red-text');
                    text.css('display','block');
                }
                text.html(e.message);
                setTimeout(function () {
                    text.hide('slow');
                },5000)
            }
            text.html(e.message);
            setTimeout(function () {
                text.hide('slow');
                // goBack();
            },5000);


        },
    });


}



function change_password() {
    var form = $('#submitNewUser');
    var text = $('#new_user_text');
    form.submit(function (e) {
        e.preventDefault();
    });
    var jsonData = getFormData(form);
    console.log(jsonData);

    $.ajax({
        url: "../includes/auth_change_pass.php",
        method: "POST",
        data: jsonData,
        success: function (data) {
            console.log(data);
            var e = JSON.parse(data);
            if(e.success === 'inserted'){
                text.addClass('indigo-text');
                text.css('display','block');
            } else {
                if (e.success === 'error'){
                    text.addClass('red-text');
                    text.css('display','block');
                }
                text.html(e.message);
                setTimeout(function () {
                    text.hide('slow');
                },5000)
            }
            text.html(e.message);
            setTimeout(function () {
                text.hide('slow');
                // goBack();
            },5000);


        },
    });


}

