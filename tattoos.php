<?php
   include 'header.php';
   include 'navMenuTop.php';
?>

  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=112543359450276";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class='row'>
<div class='col-sm-8 col-sm-offset-2'>


<h1>Tattoos</h1>

<ul>
	<li>Art tattoo</li>
	<li>Correction of not high quality work</li>
	<li>Development of individual sketches</li>
	<li>Correction of old tattoos</li>
	<li>Overlapping of scars</li>
</ul>

<p><strong>I work in fully sterile locations and use only quality paints and tools; guaranteed. I can work in your home or place of your choice or you can come to my home. <a href='contact.php'>Contact me</a> for more information about tattoos and tattoo sketches.</strong></p>

<p style='text-align:center;'><a href='galleryTattoos.php'>View the Gallery</a></p>
<p style='text-align:center;'><a href='search.php'>Search Through Tattoo Images</a></p>

<br/>

</div><!--close col-lg-8-->
</div><!--close row-->



<div class='row'>
<div class='col-sm-8 col-sm-offset-2'>

	<div class='col-sm-3'>
		<img src='images/gallery/tattoos/img_230.jpg' class='featuredCanvas'>
	</div>

	<div class='col-sm-3'>
		<img src='images/gallery/tattoos/img_242.jpg' class='featuredCanvas'>
	</div>

	<div class='col-sm-3'>
		<img src='images/gallery/tattoos/img_231.jpg' class='featuredCanvas'>
	</div>

	<div class='col-sm-3'>
		<img src='images/gallery/tattoos/img_300.jpg' class='featuredCanvas'>
	</div>



</div><!--close col-lg-8-->
</div><!--close row-->

<!--<img src='images/tattoos/img_04.jpg' style='width:30%;margin-left:10%;margin-right:5%;'>
<img src='images/tattoos/img_02.jpg' style='width:30%;margin-left:5%;margin-right:5%;'>

<button id='btnTattoosMore' style='background-color:black;'>Preview</button>

<div class='modal' id='modalTattoosMore'>
	<div class='modalContent'>
	    <span class="close">&times;</span>

	<?php
		//include 'moreTattoos.php';

	?>



	</div>
</div>-->

<br/>
<br/>


<div class="fb-share-button" data-href="https://www.davidjunk.com" data-layout="button" data-size="small" data-mobile-iframe="true" style='float:right;margin-right:20%;'><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.davidjunk.com">Share</a></div>



<?php
	include 'footer.php';
?>



   <script src="script/jquery-2.1.3.min.js"></script>
  <script src="script/bootstrap.js"></script>
   <script src="script/script.js"></script>	

<script>

newFunction();

</script>

</body>

</html>