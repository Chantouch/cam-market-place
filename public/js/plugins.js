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
                    $('select[name="' + child_id + '"]').append('<option value="">---Select ' + child_id.slice(0, -3) + '---</option>');
                    $.each(data, function (key, value) {
                        $('select[name="' + child_id + '"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('select[name="' + child_id + '"]').empty();
            $('select[name="' + child_id + '"]').append('<option value="">---Select ' + child_id.slice(0, -3) + '---</option>');
        }
    });
}

function moveTab(nextOrPrev) {
    alert(nextOrPrev);
    var currentTab = "";
    $('.panel-group div.panel > .collapse').each(function () {
        if ($(this).hasClass('in')) {
            currentTab = $(this);
            //currentTab.removeClass('active');
            //alert($(this).text());
        }
    });

    if (nextOrPrev === "Continue") {
        alert(currentTab.next().length);
        if (currentTab.next().length) {
            alert(currentTab.text());
            currentTab.removeClass('in');
            currentTab.next().addClass('in');
        }
        else {
        } // do nothing for now

    } else {
        alert("inside previous");

        if (currentTab.prev().length) {
            // currentTab.removeClass('active');
            currentTab.removeClass('in');
            currentTab.prev().addClass('in');
        }
        else {
        } //do nothing for now

    }
}

function nextQuestion(currentQuestion) {
    let parentEle = currentQuestion.parents(".accordion_main");
    if (parentEle.next()) {
        parentEle.find(".question-mark").addClass("fa fa-check check-mark").removeClass("question-mark").text("");
        if (currentQuestion.attr('type') !== 'checkbox') {
            if (parentEle.next().find(".accordion_head").length > 0) {
                parentEle.next().find(".accordion_head").click();
            } else {
                //there is no next--> try to go to the next colum
                parentEle.parent("div").next("div").find(".accordion_head").first().click();
            }
        }

    }

}
