require('../css/app.css');
require('./bootstrap');

// Create a function to show the specific states when the country is selected
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

    $('#state').on('change', function () {
        let state_id = this.value;
        $.get('/get_cities?state=' + state_id, function (data) {
            $("#city").html(data);

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
