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


<h1>Canvas Painting</h1>

<p>I am located in Toronto, Canada. My canvas paintings are available for sale. The price is dependent on size and delivery (where you are located) or pickup. There are a variety of sizes and paintings available. View my gallery to see the work I have done and <a href='contact.php'>contact me</a> to discuss further.</p>


<p style='text-align:center;'><a href='galleryCanvas.php'>View the Gallery</a></p>
<p style='text-align:center;'><a href='search.php'>Search Through Canvas Images</a></p>

<br/>

</div><!--close col-lg-8-->
</div><!--close row-->



<div class='row'>
<div class='col-sm-8 col-sm-offset-2'>

	<div class='col-sm-3 canvasRow'>
		<img src='images/gallery/canvas/img_227.jpg' class='featuredCanvas'>
	</div>

	<div class='col-sm-3 canvasRow'>
		<img src='images/gallery/canvas/img_249.jpg' class='featuredCanvas'>
	</div>

	<div class='col-sm-3 canvasRow'>
		<img src='images/gallery/canvas/img_224.jpg' class='featuredCanvas'>
	</div>

	<div class='col-sm-3 canvasRow'>
		<img src='images/gallery/canvas/img_303.jpg' class='featuredCanvas'>
	</div>



</div><!--close col-lg-8-->
</div><!--close row-->



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

</html>