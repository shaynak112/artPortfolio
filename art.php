<?php
   include 'header.php';
   include 'navMenuTop.php';
?>

<body>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="script/turn.min.js"></script>


<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>


<h1>Artwork</h1>

<div id="magazine">
	<div style="background-image:url(images/art/display/img_01.jpg);"></div>
	<div style="background-image:url(images/art/display/img_02.jpg);"></div>
	<div style="background-image:url(images/art/display/img_03.jpg);"></div>
	<div style="background-image:url(images/art/display/img_04.jpg);"></div>
	<div style="background-image:url(images/art/display/img_05.jpg);"></div>
	<div style="background-image:url(images/art/display/img_06.jpg);"></div>
	<div style="background-image:url(images/art/display/img_07.jpg);"></div>
	<div style="background-image:url(images/art/display/img_08.jpg);"></div>
	<div style="background-image:url(images/art/display/img_09.jpg);"></div>
	<div style="background-image:url(images/art/display/img_10.jpg);"></div>
	<div style="background-image:url(images/art/display/img_11.jpg);"></div>
	<div style="background-image:url(images/art/display/img_12.jpg);"></div>
	<div style="background-image:url(images/art/display/img_13.jpg);"></div>
	<div style="background-image:url(images/art/display/img_14.jpg);"></div>
	<div style="background-image:url(images/art/display/img_15.jpg);"></div>
	<div style="background-image:url(images/art/display/img_16.jpg);"></div>
	<div style="background-image:url(images/art/display/img_17.jpg);"></div>
</div>


<script type="text/javascript">

	$(window).ready(function() {
		$('#magazine').turn({
							display: 'double',
							acceleration: true,
							gradients: !$.isTouch,
							elevation:50,
							when: {
								turned: function(e, page) {
									/*console.log('Current view: ', $(this).turn('view'));*/
								}
							}
						});
	});
	
	
	$(window).bind('keydown', function(e){
		
		if (e.keyCode==37)
			$('#magazine').turn('previous');
		else if (e.keyCode==39)
			$('#magazine').turn('next');
			
	});

</script>







<footer id='footer'>
<div class='row'>
<div class='col-lg-6'>

<div class='navMenuTop' id='navMenuFoot'>

<ul class='navList' id='navListFoot'>
	<li class='navListItem'><a href='index.php'>Home</a></li>
	<li class='navListItem'><a href='art.php'>Art</a></li>
	<li class='navListItem'><a href='tattoos.php'>Tattoos</a></li>
	<li class='navListItem'><a href='testimonials.php'>Testimonials</a></li>
	<li class='navListItem'><a href='submitReview.php'>Submit Review</a></li>
	<li class='navListItem'><a href='about.php'>About</a></li>
	<li class='navListItem'><a href='contact.php'>Contact</a></li>
</ul>

</div><!--end navMenuTop-->

</div><!--end col-lg-6-->


<div class='col-lg-6'>

<a href='mailto:davidjunk9@gmail.com'>Email: davidjunk9@gmail.com</a>

<br/>

<a href='#'>www.yourdomainname.com</a>

<br/>

&copy; David Junk, <script>thisyear()</script>

</div><!--end col-lg-6-->
</div><!--end row-->


   <!-- script
   ================================================== -->

   <script src="script/jquery-2.1.3.min.js"></script>
  <script src="script/bootstrap.js"></script>
   <script src="script/script.js"></script>	

<script>

/*blink function for "top nine" images only on homepage all at different speeds*/

blink(9900000, 3000, '#tattooLabel');
blink(99900000, 2500, '#testimonialsLabel');
blink(900000, 3500, '#aboutLabel');
blink(900000, 4000, '#aboutLabel2');

</script>



</footer>


</html>