<?php
   include 'header.php';
   include 'navMenuTop.php';
?>

<body>

<br/>
<br/>

<div class='row'>
<div class='col-lg-4 topThreeDesigns'>

	<a href='art.php'><img src="images/art/img_01.jpg" class='artTopImgs'></a>

</div><!--end col-lg-4 topThreeDesigns-->

<div class='col-lg-4 topThreeDesigns'>

 <a href='art.php'><img src="images/art/img_02.jpg" class='artTopImgs'></a>

</div><!--end col-lg-4 topThreeDesigns-->

<div class='col-lg-4 topThreeDesigns'>

 <a href='art.php'><img src="images/art/img_03.jpg" class='artTopImgs'></a>

</div><!--end col-lg-4 topThreeDesigns-->
</div><!--end row-->

<br/>
<br/>

<div class='row'>
<div class='col-lg-10 col-lg-offset-1'>

<img src='titleName.jpg' class='titleName'>

</div>
</div><!--end row-->

<br/>
<br/>




<div class='row' id='topNine'>


<div class='row' id='rowOne'>

<div class='col-lg-4'>

	<div class='middleOfNineDivs'>

		<a href='tattoos.php'>
		<img src='images/tattoos/img_01.jpg' id='tattooLabel'/>
		<p class='topNineText'>Tattoos</p></a>
	</div>


</div>


<div class='col-lg-4'>

	<div class='middleOfNineDivs nineEven'>



	</div>

</div>


<div class='col-lg-4'>

	<div class='middleOfNineDivs'>



	</div>

</div>


</div><!--end row one-->

<br/>
<br/>

<div class='row' id='rowTwo'>

<div class='col-lg-4'>

	<div class='middleOfNineDivs nineEven'>



	</div>

</div>


<div class='col-lg-4'>

	<div class='middleOfNineDivs'>

		<a href='testimonials.php'>
		<img src='images/testimonial/img_01.jpg' id='testimonialsLabel'/>
		<p class='topNineText'>Testimonials</p></a>


	</div>

</div>


<div class='col-lg-4'>

	<div class='middleOfNineDivs nineEven'>



	</div>

</div>


</div><!--end row two-->

<br/>
<br/>

<div class='row' id='rowThree'>

<div class='col-lg-4'>

	<div class='middleOfNineDivs'>




	</div>

</div>


<div class='col-lg-4'>

	<div class='middleOfNineDivs nineEven'>



	</div>

</div>


<div class='col-lg-4'>

	<div class='middleOfNineDivs'>

		<a href='about.php'>
		<img src='images/art/about2.jpg' id='aboutLabel2'/></a>
		<a href='contact.php'>
		<img src='images/art/about.jpg' id='aboutLabel'/></a>
		<a href='about.php'><p class='topNineText'>About</p></a>
		<a href='contact.php'><p class='topNineText'>Contact</p></a>

	</div>

</div>


</div><!--end rowThree-->

</div>


</body>


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

<a href='http://www.davidjunk.com'>www.davidjunk.com</a>

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