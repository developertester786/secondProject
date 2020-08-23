$(document).ready(function () {
/*
  Load more content with jQuery - May 21, 2013
  (c) 2013 @ElmahdiMahmoud
*/   

$(function () {
    $(".common").slice(0, 3).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".common:hidden").slice(0, 3).slideDown();
        if ($(".common:hidden").length == 0) {
            //$("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

});