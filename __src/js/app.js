$(document).ready(function(){
    var svg = $('.new_map svg');
    svg.find("g[id^='id']").each(function (i, el) {
        $(this).css({'opacity':0, 'cursor':'pointer', 'transition':'opacity 0.1s ease'}); //
        $(this).hover(function(){
            $(this).css('opacity',1);
        }, function(){
            $(this).css('opacity',0);
        })
    });
})