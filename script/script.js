

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




          // Get the modal
                var modal = document.getElementById('modalTattoos');

                // Get the button that opens the modal
                var btn = document.getElementById("btnTattoos");

                 // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event)
            {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        



    /*function thisyear()
    {
    	var d = new Date();
    	var todayYear = getFullYear();
    	return todayYear;
    }*/
    
    function aboutModal()
    {
            // Get the modal
        var modal = document.getElementById('modalAbout');

        // Get the button that opens the modal
            var btn = document.getElementById("btnAbout");

             // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    }

    //document.getElementById("a").onclick = function () { Foo(param); };

    
   

