

</div>



<script src="/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<!--    <script>-->
<!--        window.jQuery || document.write('<script src="js/main.js"><\/script>')-->
<!--    </script>-->

<script rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/jquery-validation/dist/jquery.validate.js"></script>
<script rel="stylesheet" src="js/main.js"></script>
<script rel="stylesheet" src="js/functions.js"></script>
<script rel="stylesheet" src="js/add_update.js"></script>
<script rel="stylesheet" src="js/admin.js"></script>
<script rel="stylesheet" src="js/admin-pdf-download-btn.js"></script>
<script>
    let doc = $(document);

    doc.ready(function () {

        $('.dependant-container-parent').on('click','#removeDependant',function () {
            $(this).closest('.dependant-container').remove();
            var depnum = dependantCounter()-1;
            $('#depCount').val(depnum);
        });

        $('#adminlogin').submit(function(e){
            e.preventDefault();

        });


        //    Materialize Initialization
        $('select').formSelect();
        var currYear = (new Date()).getFullYear();
        $('.datepicker').datepicker({
            defaultDate: new Date(currYear,0,1),
            maxDate: new Date(currYear,12,31),
            yearRange: [1920, currYear]
        });



    });
</script>

</body>

</html>