/**
 * Created by Chantouch on 7/14/2017.
 */
var page = 1;
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        page++;
        loadMoreData(page);
    }
});

function loadMoreData(page) {
    $.ajax({
        url: '?page=' + page,
        type: "get",
        beforeSend: function () {
            $('.ajax-load').show();
        }
    }).done(function (data) {
        if (data.html === "") {
            $('.ajax-load').html("No more records found");
            return;
        }
        $('.ajax-load').hide();
        $("#product-data").append(data.html);
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        alert('server not responding...');
    });
}