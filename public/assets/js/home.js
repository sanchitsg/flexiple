$(document).ready( function() {
    var header_bg_color = $('body').find('#bg-color').val().length !== 0 ? $('body').find('#bg-color').val() : '';
    var header_banner_color = $('body').find('#bt-color').val().length !== 0 ? $('body').find('#bt-color').val() : '';
    var header_font_color = $('body').find('#ft-color').val().length !== 0 ? $('body').find('#ft-color').val() : '';
console.log("1. " + header_bg_color + ", 2. " + header_banner_color + ", 3. " + header_font_color);
    if(header_bg_color.length !== 0) {
        $('body').find('.layout-main .navbar').css('background-color',header_bg_color)
    }
    if(header_banner_color.length !== 0) {
        $('body').find('.layout-main .header .navbar .navbar-brand span').css('color',header_banner_color)
    }
    if(header_font_color.length !== 0) {
        $('body').find('.layout-main .header .navbar #header-menu ul li .nav-link').css('color',header_font_color)
    }

    var html = "";

    $('body').on('click','.edit',function() {
        var edit_object = $(this).data('edit-object').length !==0 ? $(this).data('edit-object') : '';

        if(edit_object.length !== 0) {
            switch (edit_object) {
                case 'content':
                    $('body').find('#edit-main-content-modal').modal('show');
                    break;

                case 'header':
                    $('body').find('#edit-header-modal').modal('show');
                    break;

                default:
                    console.log("Section not editable!");
                    break;
            }
        } else {
            console.log("Section not editable!");
        }
    });

    
    $('body').on('keydown keyup focusout','input#menu-number', function() {
        num = $(this).val().length !== 0 ? $(this).val() : '';
        html = "";
        if(num > 0 && num < 5 && /^\+?(0|[1-9]\d*)$/.test(num)) {
            $('body').find('#menu-num-error').hide();
            $('body').find('#update-header-layout').attr('disabled',false);

            for(var x=1; x <= parseInt(num); x++) {
                html = html + '<div class="col-12">';
                html = html + '<div class="form-group">';
                html = html + '<label for="menu-name[]"> Menu Name ' + x + ' </label>';
                html = html + '<input type="text" class="form-control" name="menu-name[]">';
                html = html + '</div>';
                html = html + '</div>';
            }

            $('body').find('#edit-header-modal .menu-name-row').html(html).removeClass('hide');
            
            return true;
        } else {
            html = "";
            $('body').find('#menu-num-error').show();
            $('body').find('#update-header-layout').attr('disabled',true);
            $('body').find('#edit-header-modal .menu-name-row').html(html).addClass('hide');
        }
    });

    
    $('body').on('keydown keyup focusout','input#input-number', function() {
        num = $(this).val().length !== 0 ? $(this).val() : '';
        html = "";
        if(num > 0 && num < 5 && /^\+?(0|[1-9]\d*)$/.test(num)) {
            $('body').find('#input-number-error').hide();
            $('body').find('#update-content-layout').attr('disabled',false);

            for(var x=1; x <= parseInt(num); x++) {
                html = html + '<div class="col-6">';
                html = html + '<div class="form-group">';
                html = html + '<label for="input-field-details[' + x + '][name]"> Input Field Name ' + x + ' </label>';
                html = html + '<input type="text" class="form-control" name="input-field-details[' + x + '][name]">';
                html = html + '</div>';
                html = html + '</div>';
                html = html + '<div class="col-6">';
                html = html + '<div class="form-group">';
                html = html + '<label for="input-field-details[' + x + '][type]"> Input Field Type ' + x + ' </label>';
                html = html + '<select class="form-control" name="input-field-details[' + x + '][type]">';
                html = html + '<option value="" disabled selected> Select Input Type </option>';
                html = html + '<option value="text"> Text </option>';
                html = html + '<option value="email"> Email </option>';
                html = html + '<option value="password"> Password </option>';
                html = html + '<option value="number"> Number </option>';
                html = html + '</select>';
                html = html + '</div>';
                html = html + '</div>';
            }

            $('body').find('#edit-main-content-modal .input-name-row').html(html).removeClass('hide');
            
            return true;
        } else {
            html = "";
            $('body').find('#input-number-error').show();
            $('body').find('#update-content-layout').attr('disabled',true);
            $('body').find('#edit-main-content-modal .input-name-row').html(html).addClass('hide');
        }
    });
});