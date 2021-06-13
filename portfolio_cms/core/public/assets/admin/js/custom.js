$(function($) {
    "use strict";




    // spectrum Color Picker JS
    $("#colorpicker").spectrum({
        preferredFormat: "hex",
        showInput: true,
        showPalette: true,
        palette: [
            ["red", "purple", "green", "hotpink"],
            ["#8e45ae", "#8dc24c", "#e83b35", "#ec407a", "#4285f4"],
            ["rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
        ]
    });

    // Active Data Table
    $("#idtable").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

    // Summernote
    $('.textarea').summernote();

    // active alert js
    $('.alert').alert();

    // Bootstrap Toggle js
    $(function () {
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch({state: $(this).is(':checked')}).trigger('change');
        });
    });
    
    //color picker with addon
    $('.my-colorpicker2').colorpicker();
    $('.my-colorpicker2').on('colorpickerChange', function(event) {
    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });




    // Active tooltip
    $('[data-toggle="tooltip"]').tooltip();


    /* ======================================
    Bootstrap Datepicker Start
    ========================================= */


    // Start Date
    $('#start_date').datetimepicker({ 
        format: 'L'
        }); 

    // Submission Date
    $('#submission_date').datetimepicker({ 
        format: 'L'
    }); 
    
      // Start Date
      $('.datepicker').datetimepicker({ 
        format: 'MM/YYYY'
     }); 
    // From Date Year Select
    $("#from_date").datetimepicker( {
    format: 'YYYY'
    });

    // Date To Year Select
    $("#date_to").datetimepicker( {
        format: 'YYYY'
    });

    // Toggle Date to Field
    $('#date_check').on('change', function(){
        if($('#date_check').is(':checked')) {
            $("input[name='date_to']").val('');
            $('#date_to_grup').hide();
        } else {
            $('#date_to_grup').show();
        }
    });
    if($('#date_check').is(':checked')) {
        $('#date_to_grup').hide();
    }
    /* ======================================
    Bootstrap Datepicker End
    ========================================= */


    /* ======================================
    Bs Cistom Input Start
    ========================================= */
    bsCustomFileInput.init();
    /* =======================================
    Bs Cistom Input End
    ========================================== */


    /* ======================================
    IMAGE UPLOADING Start
    ========================================= */
    $(".up-img").on("change", function () {
        var imgpath = $(this).parent().parent().find('.show-img');
        console.log(imgpath);
        var file = $(this);
        readURL(this, imgpath);
    });

    function readURL(input, imgpath) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imgpath.attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    /* ========================================
    IMAGE UPLOADING End 
    =========================================== */

});


// Iconpicker Icon Submit Javascript Code
function store(e) {
    e.preventDefault();
    $("#inputIcon").val($(".biconpicker").find('i').attr('class'));
    document.getElementById('slink').submit();
}
