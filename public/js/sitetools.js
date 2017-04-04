/////////////////////////////////////
// Magic 8 Ball Function
/////////////////////////////////////

$(function() {

    $("#magicForm input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#magicSubmit").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var question = $("input#question").val();
            $.ajax({
                url: "/magic",
                type: "POST",
                data: {
                    _token: CSRF_TOKEN,
                    question: question
                },
                cache: false,
                success: function(data, textStatus) {
                    // Enable button & show success message
                    $("#magicSubmit").attr("disabled", false);
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
    $('#successmagic').html('');
});

/////////////////////////////////////
// Quiz Function
/////////////////////////////////////

$(function() {

    $("#quizForm input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#quizSubmit").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var Question1 = $("input#Question1:checked").val();
            var Question2 = $("input#Question2:checked").val();
            var Question3 = $("input#Question3:checked").val();
            var Question4 = $("input#Question4:checked").val();
            $.ajax({
                url: "/quiz",
                type: "POST",
                data: {
                    _token: CSRF_TOKEN,
                    Question1: Question1,
                    Question2: Question2,
                    Question3: Question3,
                    Question4: Question4
                },
                cache: false,
                success: function(data, textStatus) {
                    // Enable button & show success message
                    $("#quizSubmit").attr("disabled", false);
                    $('#quizresults').html("<div class='alert alert-info'>");
                    $('#quizresults > .alert-info').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#quizresults > .alert-info')
                        .append("<strong>" + data + "</strong>");
                    $('#quizresults > .alert-info')
                        .append('</div>');

                    //clear all fields
                    $('#quizForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#quizresults').html("<div class='alert alert-danger'>");
                    $('#quizresults > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#quizresults > .alert-danger').append("<strong>Something went wrong. Please try again.</strong>");
                    $('#quizresults > .alert-danger').append('</div>');
                    //clear all fields
                    $('#quizForm').trigger("reset");
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
$('#Question1').focus(function() {
    $('#quizresults').html('');
});

/////////////////////////////////////
// Weather function
/////////////////////////////////////

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
                    $('#weather > .alert-danger').append("<strong>Something went wrong. Please try again.</strong>");
                    $('#weather > .alert-danger').append('</div>');
                    //clear all fields
                    $('#weatherForm').trigger("reset");
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

/////////////////////////////////////
// Contact Form Function
/////////////////////////////////////

$(function() {

    $("#modalContactForm input,#modalContactForm textarea").jqBootstrapValidation({
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
            var name = $("input#contactname").val();
            var email = $("input#contactemail").val();
            var message = $("textarea#contactmessage").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "/contact",
                type: "POST",
                data: {
                    _token: CSRF_TOKEN,
                    name: name,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Enable button & show success message
                    $("#btnSubmit").attr("disabled", false);
                    $('#successmodal').html("<div class='alert alert-success'>");
                    $('#successmodal > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#successmodal > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#successmodal > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#modalContactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#successmodal').html("<div class='alert alert-danger'>");
                    $('#successmodal > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#successmodal > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#successmodal > .alert-danger').append('</div>');
                    //clear all fields
                    $('#modalContactForm').trigger("reset");
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
$('#name').focus(function() {
    $('#successmodal').html('');
});

/////////////////////////////////////
// UnitConversion Function
/////////////////////////////////////

$(function() {

    $("#convertMetric input, #convertStandard input").jqBootstrapValidation({
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
            var frmname = $('input#frmname').val();
            var amount = $("input#unitAmount").val();
            var unit = $("#unit option:selected").val();
            $.ajax({
                url: "/unitConversion",
                type: "POST",
                data: {
                    _token: CSRF_TOKEN,
                    frmname: frmname,
                    amount: amount,
                    unit: unit
                },
                cache: false,
                success: function(data, textStatus) {
                    // Enable button & show success message
                    $('#unitconversion').html("<div class='alert alert-info'>");
                    $('#unitconversion > .alert-info').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#unitconversion > .alert-info')
                        .append("<strong>" + data + "</strong>");
                    $('#unitconversion > .alert-info')
                        .append('</div>');

                    //clear all fields
                    $('#convertMetric').trigger("reset");
                    $('#convertStandard').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#unitconversion').html("<div class='alert alert-danger'>");
                    $('#unitconversion > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#unitconversion > .alert-danger').append("<strong>Something went wrong. Please try again! </strong>");
                    $('#unitconversion > .alert-danger').append('</div>');
                    //clear all fields
                    $('#convertMetric').trigger("reset");
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
$('#unitAmount').focus(function() {
    $('#unitconversion').html('');
});