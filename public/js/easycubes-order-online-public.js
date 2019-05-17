$(document).ready(function () {
    $(".order-page-pills > div > a").on('click',function () {
        $(this).parent().siblings().removeClass("active");
        $(this).parent().addClass("active");

        if ($(this).attr('href') === "#ordernew-cart-products")
        {
            $(".order-summary").show();
        }
        else
        {
            $(".order-summary").hide();
        }

    });

    $(".order-summary-toggle").on('click',function () {
        if ($(this).find("div").hasClass("colspin"))
        {
            $(this).find("div").removeClass("colspin");
            $(this).find("div").addClass("colspout");
        }
        else {
            $(this).find("div").addClass("colspin");
            $(this).find("div").removeClass("colspout");
        }
    });

    $(".order-summary-short .btn-order").on('click',function (e) {
        $('.order-page-pills a[href="#ordernew-cart-shipping"]').trigger('click');
        e.preventDefault()
    });
});