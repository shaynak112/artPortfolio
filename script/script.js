//alert("test");





function blink(time, interval, image)
{
    var timer = window.setInterval(function()
    {
        $(image).css("opacity", "0.1");
        window.setTimeout(function()
        {
            $(image).css("opacity", "1");
        }, 100);
    }, interval);
    window.setTimeout(function(){clearInterval(timer);}, time);
}




