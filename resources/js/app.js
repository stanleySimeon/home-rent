require('../css/app.css');
require('./bootstrap');

$(document).ready(function () {
    $.ajaxSetup({
        cache: false
    });

    $('#country').on('change', function () {
        let country_id = this.value;
        $.get('/get_states?country=' + country_id, function (data) {
            $("#state").html(data);
        });
    });

    $('.name_over').on('mouseover', function () {
        let dropdown = $(this).find('.dropdown-menu');
        dropdown.show();
    });

    $('.name_over').on('mouseout', function () {
        let dropdown = $(this).find('.dropdown-menu');
        dropdown.hide();
    });
});
