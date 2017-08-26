<?php
   include 'header.php';
   include 'navMenuTop.php';
?>

<!doctype html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="turn.min.js"></script>

<style type="text/css">
body{
	background:#ccc;
}
#magazine{
	width:1152px;
	height:752px;
}
#magazine .turn-page{
	background-color:#ccc;
	background-size:100% 100%;
}
</style>
</head>
<body>

<div id="magazine">
	<div style="background-image:url(pages/img_01.jpg);"></div>
	<div style="background-image:url(pages/img_02.jpg);"></div>
	<div style="background-image:url(pages/img_03.jpg);"></div>
	<div style="background-image:url(pages/img_04.jpg);"></div>
	<div style="background-image:url(pages/img_05.jpg);"></div>
	<div style="background-image:url(pages/img_06.jpg);"></div>
	<div style="background-image:url(pages/img_07.jpg);"></div>
	<div style="background-image:url(pages/img_08.jpg);"></div>
	<div style="background-image:url(pages/img_09.jpg);"></div>
	<div style="background-image:url(pages/img_10.jpg);"></div>
	<div style="background-image:url(pages/img_11.jpg);"></div>
	<div style="background-image:url(pages/img_12.jpg);"></div>
	<div style="background-image:url(pages/img_13.jpg);"></div>
	<div style="background-image:url(pages/img_14.jpg);"></div>
	<div style="background-image:url(pages/img_15.jpg);"></div>
	<div style="background-image:url(pages/img_16.jpg);"></div>
	<div style="background-image:url(pages/img_17.jpg);"></div>
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

</body>

<?php
	include 'footer.php';

?>

</html>
