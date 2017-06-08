// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () {
    };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

function get_child(parent_id, child_id, url) {
    $('select[name="' + parent_id + '"]').on('change', function () {
        var country_id = $(this).val();
        if (country_id) {
            $.ajax({
                url: url + country_id,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('select[name="' + child_id + '"]').empty();
                    $.each(data, function (key, value) {
                        $('select[name="' + child_id + '"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('select[name="' + child_id + '"]').empty();
        }
    });
}
