
function adddependantupdate() {
    var depnum = dependantCounter()+1;
    // console.log(depnum);
    $('#updateInput #depCount').val(depnum);


    var html = '<div class="dependant-container">\n' +
        '                    <div class="row valign-wrapper">\n' +
        '                        <div class="col s8">\n' +
        '                            <h6 class="left">Dependant '+depnum+'</h6>\n' +
        '                        </div>\n' +
        '                        <div class="col s4">\n' +
        '                            <a class="btn red white-text waves-effect waves-light right"  id="removeDependant">-</a>\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                    <div class="row">\n' +
        '                        <div class="col s12 l4">\n' +
        '                            <div class="input-field">\n' +
        '                                <input type="text" id="depname" name="depname'+depnum+'">\n' +
        '                                <label for="depname" class="white-text">Full Name</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +

        '                        <div class="col s12 l4">\n' +
        '<div class="input-field">\n' +
        '<input type="text" id="deprel" name="deprel'+depnum+'">\n' +
        '                                <label for="deprel" class="white-text">Relationship</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +

        '                        <div class="col s12 l4">\n' +
        '<div class="input-field">\n' +
        '<input type="text" id="depdob" name="depdob'+depnum+'" class="datepicker">\n' +
        '                                <label for="depdob" class="white-text">Date of Birth</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '                        <div class="col s12 l6">\n' +
        '                            <div class="input-field">\n' +
        '                                <input type="text" id="depssn" name="depssn'+depnum+'">\n' +
        '                                <label for="depssn" class="white-text">SSN</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +
        '                        <div class="col s12 l6">\n' +
        '                            <div class="input-field">\n' +
        '                                <input type="text" id="deplived" name="deplived'+depnum+'">\n' +
        '                                <label for="deplived' +
        '" class="white-text">Month Lived With You</label>\n' +
        '                            </div>\n' +
        '                        </div>\n' +

        '<div class="col s12 l6">'+
        '<div class="input-field">'+
        '<input type="text" id="dep_ip_pin" name="dep_ip_pin'+depnum+'">'+
       '<label for="dep_ip_pin" class="white-text">IP Pin</label>'+
    '</div>'+
    '</div>'+

    '<div class="col s12 l6">'+
        '<div class="input-field">'+
        '<input type="text" id="dep_income" name="dep_income'+depnum+'">'+
        '<label for="dep_income" class="white-text">Dependent Income ($)</label>'+
    '</div>'+
    '</div>'+


        '                    </div>\n' +
        '                    <div class="row valign-wrapper">\n' +
        '<div class="col s12 l12">\n' +
        '<div class="radio-btn-close radio-btn-close1">\n' +
        '<div class="white-text left">Is the dependant Disabled?</div>\n' +
        '<div class="right">\n'+
        '<label>\n' +
        '<input name="depdsiabled'+depnum+'" type="radio" class="with-gap" value="yes" checked/>\n' +
        '<span class="white-text">yes</span>\n' +
        '</label>\n' +
        '<label>\n' +
        '<input name="depdsiabled'+depnum+'" type="radio" class="with-gap" value="no" />\n' +
        '<span class="white-text">no</span>\n' +
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
        '<input name="depfullstudent'+depnum+'" type="radio" class="with-gap" value="no" />\n' +
        '<span class="white-text">no</span>\n' +
        '</label>\n' +
        '</div>\n'+
        '</div>\n' +
        '</div>\n' +
        '                    </div>\n' +
        '                </div>';

    var dependantContainerParent = $('.dependant-container-parent');
    dependantContainerParent.append(html);
}


