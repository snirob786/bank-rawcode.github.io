// function adminPdfPreview() {
//     $(document).on('click','#pdf_btn',function (e) {
//         e.preventDefault();
//       var specialId = $(this).attr('special_id');
//       console.log(specialId);
//         $.ajax({
//             url: "../pdf-creator.php",
//             method: "POST",
//             data: {
//                 specialId: specialId
//             },
//             success: function (data) {
//                 // text.html(data);
//                 // console.log(data);
//                 // var e = JSON.parse(data);
//                 // console.log(data);

//                 // if(e.type === 'success'){
//                 //
//                 //     window.location.replace("/admin-dashboard");
//                 //
//                 // }else{
//                 //     console.log('error');
//                 //     text.addClass('red-text');
//                 //     text.css('display','block');
//                 //
//                 //
//                 //     text.html(e.message);
//                 //     setTimeout(function () {
//                 //         text.hide('slow');
//                 //     },5000)
//                 // }


//             },

//         });
//     });
// }