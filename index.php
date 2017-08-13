<?php
   include 'header.php';
   include 'navMenuTop.php';
?>

<body>

<?php

$x = 0;
$y = 1;
$z = 2;
$a = 3;
$b = 4;
$images = array("images/art/img_01.jpg","images/art/img_02.jpg","images/art/img_03.jpg","images/art/img_04.jpg","images/art/img_05.jpg")

?>

<div class='row'>
<div class='col-lg-4 topThreeDesigns'>

 <?php echo "<img src=" . $images[$x] . " class='artTopImgs id='firstImgTop'>"; ?>

</div><!--end col-lg-4 topThreeDesigns-->

<div class='col-lg-4 topThreeDesigns'>

 <?php echo "<img src=" . $images[$y] . " class='artTopImgs' id='secondImgTop'>"; ?>

</div><!--end col-lg-4 topThreeDesigns-->

<div class='col-lg-4 topThreeDesigns'>

 <?php echo "<img src=" . $images[$z] . " class='artTopImgs' id='thirdImgTop'>"; ?>

</div><!--end col-lg-4 topThreeDesigns-->
</div><!--end row-->

<br/>
<br/>

<div class='row'>
<div class='col-lg-10 col-lg-offset-1'>

<img src='titleName.jpg' id='titleName'>

</div>
</div><!--end row-->

<br/>
<br/>

<div class='row' id='topNine'>


<div class='row' id='rowOne'>

<div class='col-lg-4'>

	<div class='middleOfNineDivs'>

		<a href='#'>
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

		<a href='#'>
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

		<a href='#'>
		<img src='images/art/about.jpg' id='aboutLabel'/>
		<p class='topNineText'>About</p></a>

	</div>

</div>


</div><!--end rowThree-->





<script type="text/javascript">

    var jArray= <?php echo json_encode($images ); ?>;

 </script>

<script>
blink(9900000, 3000, '#tattooLabel');
blink(99900000, 2500, '#testimonialsLabel');
blink(900000, 3500, '#aboutLabel');
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());
switchingImgs(x, y, z, jArray());

</script>



<footer id='footer'>
<div class='row'>

left half nav menu
right half contact info copyright email etc

</div>
</footer>
</body>
</html>