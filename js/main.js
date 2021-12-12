function toAdmin() {
    console.log("send to admin");

    $('#user-detail').fadeOut("fast",function () {
        $(this).addClass('displayNone');
        $('#admin-login').removeClass('displayNone');
    });

}


function toUser() {
    console.log("send to user");

    $('#admin-login').fadeOut("fast",function () {
        $(this).addClass('displayNone');
        $('#user-detail').removeClass('displayNone');
    });

}





function dependantCounter() {
    var counter = $('#depCount').val();
    var counterdata = parseInt(counter);
    return counterdata;
    // console.log(counterdata);
}







function adddependant() {
    var depnum = dependantCounter()+1;
    $('#depCount').val(depnum);


    var html = '<div class="dependant-container">\n' +
        '                    <div class="row valign-wrapper">\n' +
        '                        <div class="col s8">\n' +
        '                            <h6 class="left">Dependant</h6>\n' +
        '                        </div>\n' +
        '                        <div class="col s4">\n' +
        '                            <a class="btn red white-text waves-effect waves-light right" onclick="removeDependant()" id="removeDependant">-</a>\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                    <div class="row">\n' +
        '                        <div class="col s12 l3">\n' +
        '                            <div class="input-field">\n' +
        '                                <input type="text" id="depname" name="depname'+depnum+'">\n' +
        '                                <label for="depname" class="white-text">Full Name</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +

        '                        <div class="col s12 l3">\n' +
        '<div class="input-field">\n' +
        '<input type="text" id="deprel" name="deprel'+depnum+'">\n' +
        '                                <label for="deprel" class="white-text">Relationship</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +

        '                        <div class="col s12 l2">\n' +
        '<div class="input-field">\n' +
        '<input type="text" id="depdob" name="depdob'+depnum+'" class="datepicker">\n' +
        '                                <label for="depdob" class="white-text">Date of Birth</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '                        <div class="col s12 l2">\n' +
        '                            <div class="input-field">\n' +
        '                                <input type="text" id="depssn" name="depssn'+depnum+'">\n' +
        '                                <label for="depssn" class="white-text">SSN</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '                        <div class="col s12 l2">\n' +
        '                            <div class="input-field">\n' +
        '                                <input type="text" id="deplived" name="deplived'+depnum+'">\n' +
        '                                <label for="deplived' +
        '" class="white-text">Month Lived With You</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                    <div class="row valign-wrapper">\n' +
                                '<div class="col s12 l12">\n' +
                                    '<div class="radio-btn-close radio-btn-close1">\n' +
                                        '<div class="white-text left">Is the dependant disabled?</div>\n' +
                                        '<div class="right">\n'+
                                        '<label>\n' +
                                            '<input name="depdsiabled'+depnum+'" type="radio" class="with-gap" value="yes" checked/>\n' +
                                            '<span class="white-text">yes</span>\n' +
                                        '</label>\n' +
                                        '<label>\n' +
                                            '<input name="depdsiabled'+depnum+'" type="radio" class="with-gap" value="no"/>\n' +
                                            '<span class="white-text">No</span>\n' +
                                            '</label>\n' +
                                            '</div>\n'+
                                    '</div>\n' +

                                    '<div class="radio-btn-close radio-btn-close2">\n' +
                                        '<div class="white-text left">Is the dependant full time student?</div>\n' +
                                        '<div class="right">\n'+
                                            '<label>\n' +
                                            '<input name="depfullstudent'+depnum+'" type="radio" class="with-gap" value="yes" checked/>\n' +
                                            '<span class="white-text">yes</span>\n' +
                                            '</label>\n' +
                                            '<label>\n' +
                                            '<input name="depfullstudent'+depnum+'" type="radio" class="with-gap" value="no"/>\n' +
                                            '<span class="white-text">No</span>\n' +
                                            '</label>\n' +
                                        '</div>\n'+
                                    '</div>\n' +
                                '</div>\n' +
        '                    </div>\n' +
        '                </div>';

    var dependantContainerParent = $('.dependant-container-parent');
    dependantContainerParent.append(html);


}



function newUserQuery(){
    $(this).submit(function(e){
        e.preventDefault();
    });

    $('#new_user_modal').addClass('displayNone');
    $('.heading').removeClass('displayNone');
    $('.form-container').removeClass('displayNone');
    $('.bottom-content').removeClass('displayNone');
}


function removeDependant(id){

    $('.dependant-container'+id).remove();
    var depnum = dependantCounter()-1;
    $('#depCount').val(depnum);

    console.log('.dependant-container'+id);
}

