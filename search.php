<?php
   include 'header.php';
   include 'navMenuTop.php';
   include 'dbConnect.php';
?>

<body>


<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>


<h1>Search</h1>

<p>Looking for a specific type of image? Search here.</p>
<p>Note: currently only searches through canvas</p>

</div>
</div><!--end row-->

<div class='row'>
<div class='col-lg-4 col-lg-offset-2'>

<form id="searchImagesForm" class="form-horizontal" action="" method="post">
      
      <input type="text" class="form-control" name="searchImages" id="searchImages"/>
      <br/>
      <input type="submit" class="btn btn-primary" id="searchImageSubmit" name="searchImageSubmit" value="Search" style='background-color:#00ff00;border:none;color:black;'/>
    </form>

</div>
</div><!--end row-->

<div class='row' id='searchResults'>
<div class='col-lg-8 col-lg-offset-2' id='searchResultColumn'>

<?php
	if(isset($_POST['searchImageSubmit']))
          {
             $dbconn = new Dbconnect;
             $db = $dbconn->getDb();
             $searchCat = $_POST['searchImages'];
             $query = "SELECT * FROM galCanvas WHERE description LIKE '%$searchCat%' ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->bindValue(':%$searchCat%', '%$searchCat%', PDO::PARAM_STR);
            $statement->execute();

            echo "<br/>";
           echo "<h2 style='margin-left:2%;'>Search Term: " . $searchCat;
            echo "</h2>";
            echo "<br/>";

          echo "<div class='row'>";

            $increment = 0;

          if (!$statement->rowCount() == 0)
            {
              while ($results = $statement->fetch())
              {
                  if($increment%4==0)
                  {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-3' style='left:2%;margin-bottom:30px;'>";
                    echo "<p style='margin-left:15%;'>Title: " . $results['title'] . "</p>";
                    echo "<p style='margin-left:15%;'>Size: " . $results['size'] . "</p>";
                    echo "<p style='margin-left:15%;'>Description: " . $results['description'] . "</p>";
                    echo "<img src='images/gallery/" . $results['url'] . "' style='width:70%;margin-left:15%;'>";
                    echo "</div>";
                    $increment++; 
                  }
                  else if(!$increment%4==0)
                  {
                    echo "<div class='col-md-3' style='left:2%;margin-bottom:30px;'>";
                    echo "<p style='margin-left:15%;'>Title: " . $results['title'] . "</p>";
                    echo "<p style='margin-left:15%;'>Size: " . $results['size'] . "</p>";
                    echo "<p style='margin-left:15%;'>Description: " . $results['description'] . "</p>";
                    echo "<img src='images/gallery/" . $results['url'] . "' style='width:70%;margin-left:15%;'>";
                    echo "</div>";
                    $increment++; 
                  }  
                  else
                  {
                    echo "No results";
                    break;

                  }
                             
              }
            }
            else
            {
              echo "<div style='margin-left:15%;font-size:1.5em;'><strong>";
              echo "Sorry, no results, try narrowing down your search.";
              echo "</strong></div>";
              echo "<br/>";
              echo "<br/>";
            }
          }

?>
</div>
</div>


<?php
   include 'footer.php';
?>



</body>
</html>