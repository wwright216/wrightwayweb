$(function() {

    $("#weatherForm input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var ZipCode = $("input#ZipCode").val();
            $.ajax({
                url: "/weather",
                type: "POST",
                data: {
                    _token: CSRF_TOKEN,
                    ZipCode: ZipCode
                },
                cache: false,
                success: function(data, textStatus) {
                    // Enable button & show success message
                    $("#weather").append(data);
                    //clear all fields
                    $('#weatherForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#weather').html("<div class='alert alert-danger'>");
                    $('#weather > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#weather > .alert-danger').append("<strong>Something went wrong. Please ask another question.</strong>");
                    $('#weather > .alert-danger').append('</div>');
                    //clear all fields
                    $('#magicForm').trigger("reset");
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#ZipCode').focus(function() {
    $('#weather').html('');
});
