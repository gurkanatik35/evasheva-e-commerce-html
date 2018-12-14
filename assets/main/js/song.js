$( document ).ready(function() {

    var fixedBox = $('#clipBox');
    var boxTopOffset = fixedBox.offset();
    var offsetTop = boxTopOffset.top;
    var MBwidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;

    window.onscroll = function(ev)
    {
        var colmnWidth = $('.sarki-p').width();
        var totalScroll = $('html').scrollTop() || $('body').scrollTop();
        if(totalScroll == offsetTop && MBwidth > 768 || offsetTop < totalScroll && MBwidth > 768){
            fixedBox.addClass("embedFixed");
            fixedBox.css("width",colmnWidth);
        }else{
            fixedBox.removeClass("embedFixed");
            fixedBox.css("width","auto");
        }
    };

});