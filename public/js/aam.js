/*
|
|
|   Author: Abdul AL-Faraj
|   School: EEE, Newcastle University
|
|
*/


(function() {
    $(document).ready(function() {
        $("#accordian h3").click(function() {
            //slide up all the link lists
            $("#accordian ul ul").slideUp();
            //slide down the link list below the h3 clicked - only if its closed
            if (!$(this).next().is(":visible")) {
                $(this).next().slideDown();
            };
        });
    });


    $(function() {
        $('#datetimepicker1').datetimepicker({
            pickTime: false
        });
    });

    $(function() {
        $('#datetimepicker2').datetimepicker({
            language: 'en',

            pickDate: false
        });
    });

    //alert(location.pathname);
    $(function() {
        $('#accordian ul li ul li a[href^="' + location.pathname + '"]').addClass('checked');
    });

}());