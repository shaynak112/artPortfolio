<?php
   include 'header.php';
   include 'navMenuTop.php';
   include 'dbConnect.php';
?>



<div class='row'>
<div class='col-sm-8 col-sm-offset-2'>


<h1>Gallery - New Way (Web Art)</h1>

<p style='float:right;'><a href='galleries.php'>All Galleries?</a></p>

</div><!--end div col-lg-8-->
</div>

<br/>
<br/>

<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galNewWayWeb ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $webImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<div class='row'>


<?php

$increment=3;

foreach($webImgs as $c)
{
	if($increment%3==0)
	{
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-sm-4 topThreeDesigns'>";
		echo "<div class='newWebGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='newWebGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<a href='images/gallery/" . $c->url . "' data-lightbox='image-1'><img src='images/gallery/" . $c->url . "' class='artTopImgs galRegImg' alt='" . $c->title . "'></a>";
		echo "<div class='newWebInfo' style='margin-left:30%;font-size:1.3em;'>" . $c->description . "</div>";
		echo "</div>";
		$increment++;
	}
	else
	{	
		echo "<div class='col-sm-4 topThreeDesigns'>";
		echo "<div class='newWebGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='newWebGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<a href='images/gallery/" . $c->url . "' data-lightbox='image-1'><img src='images/gallery/" . $c->url . "' class='artTopImgs galRegImg' alt='" . $c->title . "'></a>";
		echo "<div class='newWebInfo' style='margin-left:30%;font-size:1.3em;'>" . $c->description . "</div>";
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