<?php
   include 'header.php';
   include 'navMenuTop.php';
   include 'dbConnect.php';
?>

<br/>
<br/>
<br/>

<body>





<div class='row'>
<div class='col-sm-10 col-sm-offset-1'>

<img src='images/titleName.jpg' class='titleName'>

</div>
</div><!--end row-->


<br/>
<br/>
<br/>
<br/>


<div class='row'>
<div class='col-sm-4 homepageImg'>
<a href='galleryTattoos.php' class='homepageImgLink'><h2 class='homepageSecondTitles'>Tattoos</h2></a>

</div>

<div class='col-sm-4 homepageImg'>

<a href='galleryCanvas.php' class='homepageImgLink'><h2 class='homepageSecondTitles'>Canvas</h2></a>

</div>

<div class='col-sm-4 homepageImg'>

<a href='galleryWeb.php' class='homepageImgLink'><h2 class='homepageSecondTitles'>Web</h2></a>

</div>
</div>


<div class='row'>
<div class='col-sm-4 homepageImg'>

<div>
<a href='galleryTattoos.php'><h2 class='homepageSecondTitles'> </h2></a>
</div>

<br/>
<br/>
<br/>

<div class='homeThreeClass'> 

<?php

            $dbconn1 = new Dbconnect;
            $db1 = $dbconn1->getDb();
            $query1 = "SELECT * FROM galTattoos WHERE homepage='yes' ORDER BY galleryOrder ASC";
            $statement1 = $db1->prepare($query1);
            $statement1->execute();
            $tattooImgs = $statement1->fetchAll(PDO::FETCH_OBJ);
?>

	<a href='galleryTattoos.php'>

<?php
	foreach($tattooImgs as $t)
{

	echo "<img src='images/gallery/" . $t->url . "' class='mainImgs rotating-item artTopImgs' alt='" . $t->title . "'>";
}

?>

</a>

</div>

</div><!--end col-lg-4 topThreeDesigns-->

<div class='col-sm-4 homepageImg'>

<br/>
<br/>
<br/>
<br/>
<br/>

<div class='homeThreeClass'>

<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galCanvas WHERE homepage='yes' ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $canvasImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

 	<a href='galleryCanvas.php'>

<?php

foreach($canvasImgs as $c)
{

	echo "<img src='images/gallery/" . $c->url . "' class='mainImgs rotating-item1 artTopImgs' alt='" . $c->title . "'>";
}

?>

 	</a>

</div>

</div><!--end col-lg-4 topThreeDesigns-->

<div class='col-sm-4 homepageImg'>

<br/>
<br/>
<br/>
<br/>
<br/>

	<div class='homeThreeClass'>

 	

 	<?php

            $dbconn2 = new Dbconnect;
            $db2 = $dbconn2->getDb();
            $query2 = "SELECT * FROM galWeb WHERE homepage='yes' ORDER BY galleryOrder ASC";
            $statement2 = $db2->prepare($query2);
            $statement2->execute();
            $webImgs = $statement2->fetchAll(PDO::FETCH_OBJ);
?>

<a href='galleryWeb.php'>

<?php

foreach($webImgs as $w)
{

	echo "<img src='images/gallery/" . $w->url . "' class='mainImgs rotating-item2 artTopImgs' alt='" . $w->title . "'>";
}

?>



 	</a>

</div>

</div><!--end col-lg-4 topThreeDesigns-->
</div><!--end row-->



<br/>
<br/>



<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<?php
	include 'footer.php';
?>



   <!-- script
   ================================================== -->


   <script src="script/infinite-rotator.js"></script>



</body>
</html>