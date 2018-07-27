$(document).ready(function () {
    $('#country').on('change', function () {
        var countryID = $(this).val();
        if (countryID) {
            $.ajax({
                type: 'POST', url: 'core/script/location_script.php.php', data: 'country_id=' + countryID, success: function (html) {
                    $('#state').html(html);
                    $('#city').html('Select state first');
                }
            });
        } else {
            $('#state').html('Select country first');
            $('#city').html('Select state first');
        }
    });
    $('#state').on('change', function () {
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type: 'POST', url: 'ajaxFile.php', data: 'state_id=' + stateID, success: function (html) {
                    $('#city').html(html);
                }
            });
        } else {
            $('#city').html('Select state first');
        }
    });
});
