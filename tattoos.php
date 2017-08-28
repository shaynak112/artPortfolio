<?php
   include 'header.php';
   include 'navMenuTop.php';
?>


<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>


<h1>Tattoos</h1>

<ul>
	<li>Art tattoo</li>
	<li>Correction of not high quality work</li>
	<li>Development of individual sketches</li>
	<li>Correction of old tattoos</li>
	<li>Overlapping of scars</li>
</ul>

<p><strong>I work in fully sterile locations and use only qualitative paints and tools that are guaranteed. I can work in your home or place of your choice or you can come to my home.</strong></p>
<p style='text-align:center;'>Tattoo Sketches: $50</p>

<br/>

<img src='images/tattoos/img_04.jpg' style='width:30%;margin-left:10%;margin-right:5%;'>
<img src='images/tattoos/img_02.jpg' style='width:30%;margin-left:5%;margin-right:5%;'>

<button id='btnTattoosMore' style='background-color:black;'>More</button>

<div class='modal' id='modalTattoosMore'>
	<div class='modalContent'>
	    <span class="close">&times;</span>

	<?php
		include 'moreTattoos.php';

	?>



	</div>
</div>



</div><!--end div col-lg-8-->
</div><!--end row-->

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