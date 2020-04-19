function introHeight() {
    var wh = $(window).height();
    $('#intro').css({height: wh-(wh/3)});
}

introHeight();
$(window).bind('resize',function () {
    //Update slider height on resize
    introHeight();
});
