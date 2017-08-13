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




counter==0;

function switchingImgs(x, y, z, imgArray())
{

		if(x>4)
		{
			x==0;
			y++;
			z++;
			$("#firstImgTop").attr('src', imgArray[x]);
			$("#secondImgTop").attr('src', imgArray[y]);
			$("#thirdImgTop").attr('src', imgArray[z]);
		}
		else if(y>4)
		{
			y==0;
			x++;
			z++;
			$("#firstImgTop").attr('src', imgArray[x]);
			$("#secondImgTop").attr('src', imgArray[y]);
			$("#thirdImgTop").attr('src', imgArray[z]);
		}
		else if(z>4)
		{
			z==0;
			x++;
			y++;
			$("#firstImgTop").attr('src', imgArray[x]);
			$("#secondImgTop").attr('src', imgArray[y]);
			$("#thirdImgTop").attr('src', imgArray[z]);
		}
		else
		{
			x++;
			y++;
			z++;
			$("#firstImgTop").attr('src', imgArray[x]);
			$("#secondImgTop").attr('src', imgArray[y]);
			$("#thirdImgTop").attr('src', imgArray[z]);
		}

}
