/**
 * Magic 8 Ball Function
 */

$(function() {

    $('#magicForm input').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            $('#magicSubmit').attr('disabled', true);
            event.preventDefault();

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                question   = $('input#question').val();
            $.ajax({
                url: '/magic',
                type: 'POST',
                data: {
                    _token  : CSRF_TOKEN,
                    question: question
                },
                cache: false,
                success: function(data, textStatus) {
                    $('#magicSubmit').attr('disabled', false);
                    $('#successmagic').html('<div class=\'alert alert-success\'>');
                    $('#successmagic > .alert-success').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#successmagic > .alert-success')
                        .append('<strong>' + data + '</strong>');
                    $('#successmagic > .alert-success')
                        .append('</div>');
                    $('#magicForm').trigger('reset');
                },
                error: function() {
                    $('#successmagic').html('<div class=\'alert alert-danger\'>');
                    $('#successmagic > .alert-danger').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#successmagic > .alert-danger').append('<strong>Something went wrong. Please ask another question.</strong>');
                    $('#successmagic > .alert-danger').append('</div>');
                    $('#magicForm').trigger('reset');
                },
            });
        },
        filter: function() {
            return $(this).is(':visible');
        },
    });

    $('a[data-toggle=\'tab\']').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
});

$('#question').focus(function() {
    $('#successmagic').html('');
});

/**
 * Quiz Function
 */

$(function() {

    $('#quizForm input').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            $('#quizSubmit').attr('disabled', true);
            event.preventDefault();

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                Question1  = $('input#Question1:checked').val(),
                Question2  = $('input#Question2:checked').val(),
                Question3  = $('input#Question3:checked').val(),
                Question4  = $('input#Question4:checked').val();

            $.ajax({
                url: '/quiz',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    Question1: Question1,
                    Question2: Question2,
                    Question3: Question3,
                    Question4: Question4
                },
                cache: false,
                success: function(data, textStatus) {
                    $('#quizSubmit').attr('disabled', false);
                    $('#quizresults').html('<div class=\'alert alert-info\'>');
                    $('#quizresults > .alert-info').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#quizresults > .alert-info')
                        .append('<strong>' + data + '</strong>');
                    $('#quizresults > .alert-info')
                        .append('</div>');

                    $('#quizForm').trigger('reset');
                },
                error: function() {

                    $('#quizresults').html('<div class=\'alert alert-danger\'>');
                    $('#quizresults > .alert-danger').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#quizresults > .alert-danger').append('<strong>Something went wrong. Please try again.</strong>');
                    $('#quizresults > .alert-danger').append('</div>');

                    $('#quizForm').trigger('reset');
                },
            });
        },
        filter: function() {
            return $(this).is(':visible');
        },
    });

    $('a[data-toggle=\'tab\']').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
});

$('#Question1').focus(function() {
    $('#quizresults').html('');
});

/**
 * Weather Function
 */

$(function() {

    $('#weatherForm input').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            $('#btnSubmit').attr('disabled', true);
            event.preventDefault();

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                ZipCode    = $('input#ZipCode').val();
            $.ajax({
                url: '/weather',
                type: 'POST',
                data: {
                    _token : CSRF_TOKEN,
                    ZipCode: ZipCode
                },
                cache: false,
                success: function(data, textStatus) {
                    $('#weather').append(data);
                    $('#weatherForm').trigger('reset');
                },
                error: function() {
                    $('#weather').html('<div class=\'alert alert-danger\'>');
                    $('#weather > .alert-danger').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#weather > .alert-danger').append('<strong>Something went wrong. Please try again.</strong>');
                    $('#weather > .alert-danger').append('</div>');
                    $('#weatherForm').trigger('reset');
                },
            });
        },
        filter: function() {
            return $(this).is(':visible');
        },
    });

    $('a[data-toggle=\'tab\']').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
});

$('#ZipCode').focus(function() {
    $('#weather').html('');
});

/**
 * Contact Form Function
 */

$(function() {

    $('#modalContactForm input,#modalContactForm textarea').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            $('#btnSubmit').attr('disabled', true);
            event.preventDefault();
            
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                name       = $('input#contactname').val(),
                email      = $('input#contactemail').val(),
                message    = $('textarea#contactmessage').val();
                firstName  = name;

            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }

            $.ajax({
                url: '/contact',
                type: 'POST',
                data: {
                    _token : CSRF_TOKEN,
                    name   : name,
                    email  : email,
                    message: message
                },
                cache: false,
                success: function() {
                    $('#btnSubmit').attr('disabled', false);
                    $('#successmodal').html('<div class=\'alert alert-success\'>');
                    $('#successmodal > .alert-success').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#successmodal > .alert-success')
                        .append('<strong>Your message has been sent. </strong>');
                    $('#successmodal > .alert-success')
                        .append('</div>');
                    $('#modalContactForm').trigger('reset');
                },
                error: function() {
                    $('#successmodal').html('<div class=\'alert alert-danger\'>');
                    $('#successmodal > .alert-danger').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#successmodal > .alert-danger').append('<strong>Sorry ' + firstName + ', it seems that my mail server is not responding. Please try again later!');
                    $('#successmodal > .alert-danger').append('</div>');
                    $('#modalContactForm').trigger('reset');
                },
            });
        },
        filter: function() {
            return $(this).is(':visible');
        },
    });

    $('a[data-toggle=\'tab\']').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
});

$('#name').focus(function() {
    $('#successmodal').html('');
});

/**
 * Unit Conversion Function
 */

$(function() {

    $('#convertMetric input, #convertStandard input').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            $('#btnSubmit').attr('disabled', true);
            event.preventDefault();
            
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                frmname    = $('input#frmname').val(),
                amount     = $('input#unitAmount').val(),
                unit       = $('#unit option:selected').val();
            $.ajax({
                url: '/unitConversion',
                type: 'POST',
                data: {
                    _token : CSRF_TOKEN,
                    frmname: frmname,
                    amount : amount,
                    unit   : unit
                },
                cache: false,
                success: function(data, textStatus) {
                    $('#unitconversion').html('<div class=\'alert alert-info\'>');
                    $('#unitconversion > .alert-info').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#unitconversion > .alert-info')
                        .append('<strong>' + data + '</strong>');
                    $('#unitconversion > .alert-info')
                        .append('</div>');

                    $('#convertMetric').trigger('reset');
                    $('#convertStandard').trigger('reset');
                },
                error: function() {
                    $('#unitconversion').html('<div class=\'alert alert-danger\'>');
                    $('#unitconversion > .alert-danger').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#unitconversion > .alert-danger').append('<strong>Something went wrong. Please try again! </strong>');
                    $('#unitconversion > .alert-danger').append('</div>');
                    $('#convertMetric').trigger('reset');
                },
            });
        },
        filter: function() {
            return $(this).is(':visible');
        },
    });

    $('a[data-toggle=\'tab\']').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
});

$('#unitAmount').focus(function() {
    $('#unitconversion').html('');
});

/**
 * Add Task Function
 */

$(function() {

    $('#taskForm input').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
        },
        submitSuccess: function($form, event) {
            $('#btnSubmit').attr('disabled', true);
            event.preventDefault();

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
                title      = $('input#title').val(),
                body       = $('input#body').val();

            $.ajax({
                url: '/tasks/add',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    title : title,
                    body  : body,
                },
                cache: false,
                error: function() {
                    $('#failure').html('<div class=\'alert alert-danger\'>');
                    $('#failure > .alert-danger').html('<button type=\'button\' class=\'close\' data-dismiss=\'alert\' aria-hidden=\'true\'>&times;')
                        .append('</button>');
                    $('#failure > .alert-danger').append('<strong>Something went wrong. Please try again.</strong>');
                    $('#failure > .alert-danger').append('</div>');
                    $('#taskForm').trigger('reset');
                },
            });
        },
    });
});
