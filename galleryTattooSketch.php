<?php
   include 'header.php';
   include 'navMenuTop.php';
   include 'dbConnect.php';
?>



<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>


<h1>Gallery - Tattoo Sketches</h1>

<p style='float:right;'><a href='galleries.php'>All Galleries?</a></p>
<br/>
<br/>
<p style='float:right;'><a href='tattoos.php'>More information about tattoos</a></p>

</div><!--end div col-lg-8-->
</div>

<br/>
<br/>

<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galTattooSketch ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $tattooSketchImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<div class='row'>


<?php

$increment=3;

foreach($tattooSketchImgs as $c)
{
	if($increment%3==0)
	{
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4 topThreeDesigns'>";
		echo "<div class='tattooSketchGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='tattooSketchGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<a href='images/gallery/" . $c->url . "' data-lightbox='image-1'><img src='images/gallery/" . $c->url . "' class='artTopImgs galRegImg'></a>";
		echo "<div class='tattooSketchInfo' style='margin-left:30%;font-size:1.3em;'>" . $c->description . "</div>";
		echo "</div>";
		$increment++;
	}
	else
	{	
		echo "<div class='col-lg-4 topThreeDesigns'>";
		echo "<div class='tattooSketchGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='tattooSketchGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<a href='images/gallery/" . $c->url . "' data-lightbox='image-1'><img src='images/gallery/" . $c->url . "' class='artTopImgs galRegImg'></a>";
		echo "<div class='tattooSketchInfo' style='margin-left:30%;font-size:1.3em;'>" . $c->description . "</div>";
		echo "</div>";
		$increment++;

	}
}

?>

</div><!--end row-->
<br/>
<br/>








<?php
	include 'footer.php';

?>


<script src="lightbox/src/js/lightbox.js"></script>

</body>

<script>

//enlargeImg();

</script>

</html>