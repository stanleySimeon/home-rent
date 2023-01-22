const { times, delay } = require('lodash');

require('../css/app.css');
require('./bootstrap');

// Create a function to show the specific states when the country is selected
$(document).ready(function () {
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

    $('#country').on('change', function () {
        let country_id = this.value;
        $.get('/get_phone_code?country=' + country_id, function (data) {
            $("#phone_code").html(data);
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
