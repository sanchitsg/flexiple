$(document).ready(function () {
    var error = $('body').find('#error-text').val().length !== 0 ? $('body').find('#error-text').val() : "";

    if(error.length !== 0) {
        $('body').find('#error-message').text(error);
        $('body').find('.login-form').addClass('hide');
        $('body').find('.error-display').removeClass('hide');
        window.setTimeout( function() {
            $('body').find('.error-display').addClass('hide'); 
            $('body').find('.login-form').removeClass('hide');
        }, 3000);
    }
});