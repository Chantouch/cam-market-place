$(function () {
    $(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');
    $(".button").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
            $("#sub_qty, #wishlist_qty").val(newVal);
        } else {
            // Don't allow decrementing below one
            if (oldValue > 1) {
                newVal = parseFloat(oldValue) - 1;
                $("#sub_qty, #wishlist_qty").val(newVal);
            } else {
                newVal = 1;
                $("#sub_qty, #wishlist_qty").val(newVal);
            }
        }
        $button.parent().find("input").val(newVal);
    });
    $("#qty").on('change', function () {
        var $input = $(this);
        var value = $input.parent().find("input").val();
        if (value <= "0") {
            $("#qty").val(1);
        }
        $("#sub_qty, #wishlist_qty").val(value);
    });
    $("#sub_qty, #wishlist_qty").val($("#qty").val());


    //------------Currency Exchange Code-------------//
    $(function () {
        let $currency_id = $("#currency_id");
        let $currency_code = $("#currency_code");
        $currency_id.on('change', function () {
            let $input = $(this);
            let value = $input.find(":selected").text();//attr('data-subtext');
            let str = value.replace(/\s+/g, '');
            if (str !== '') {
                $currency_code.val(str);
            }
        });
        let value = $currency_id.find(":selected").text();//attr('data-subtext');
        let str = value.replace(/\s+/g, '');
        $currency_code.val(str);
    })
});