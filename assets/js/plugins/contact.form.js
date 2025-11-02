/**
 *
 * Template : Fluxi HTML TEMPLATE
 * Author : reacthemes
 * Author URI : https://reactheme.com/ 
 *
 **/
(function ($) {
    'use strict';

    var form = $('#contact-form');
    var formMessages = $('#form-messages');

    $(form).submit(function (e) {
        e.preventDefault();

        var formData = $(form).serialize();

        // Avoid double submission
        $(form).find('button[type="submit"]').prop('disabled', true);

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            dataType: "text"
        })
        .done(function (response) {
            $(formMessages).removeClass('error').addClass('success').text(response);
            $('#name, #email, #phone, #state, #message').val('');
        })
        .fail(function (data) {
            $(formMessages).removeClass('success').addClass('error')
                .text(data.responseText !== "" ? data.responseText 
                : "Oops! An error occurred and your message could not be sent.");
        })
        .always(function () {
            $(form).find('button[type="submit"]').prop('disabled', false);
        });

    });

})(jQuery);
