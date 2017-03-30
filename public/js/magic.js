$(function() {

    $("#magicForm input").jqBootstrapValidation({
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
            var question = $("input#question").val();
            $.ajax({
                dataType: 'JSON',
                url: "/magic",
                type: "POST",
                data: {
                    _token: CSRF_TOKEN,
                    question: question
                },
                cache: false,
                success: function(data, textStatus) {
                    // Enable button & show success message
                    $("#btnSubmit").attr("disabled", false);
                    $('#successmagic').html("<div class='alert alert-success'>");
                    $('#successmagic > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#successmagic > .alert-success')
                        .append("<strong>" + data + "</strong>");
                    $('#successmagic > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#magicForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#successmagic').html("<div class='alert alert-danger'>");
                    $('#successmagic > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#successmagic > .alert-danger').append("<strong>Something went wrong. Please ask another question.</strong>");
                    $('#successmagic > .alert-danger').append('</div>');
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
$('#question').focus(function() {
    $('#success').html('');
});
