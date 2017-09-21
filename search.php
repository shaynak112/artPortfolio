<?php
   include 'header.php';
   include 'navMenuTop.php';
   include 'dbConnect.php';
?>

<body>


<div class='row'>
<div class='col-lg-8 col-lg-offset-2'>


<h1>Search</h1>

<br/>
<br/>

</div>
</div><!--end row-->

<div class='row'>
<div class='col-lg-4 col-lg-offset-2'>

<h3>Search through canvas</h3>
<p>More information on canvas <a href='canvas.php'>here</a>.</p>

<form id="searchCanvasForm" class="form-horizontal" action="" method="post">
      
      <input type="text" class="form-control" name="searchCanvas" id="searchCanvas"/>
      <br/>
      <input type="submit" class="btn btn-primary" id="searchCanvasSubmit" name="searchCanvasSubmit" value="Search" style='background-color:#00ff00;border:none;color:black;'/>
    </form>

</div>

<div class='col-lg-4'>

<h3>Search through tattoos</h3>
<p>More information on tattoos <a href='tattoos.php'>here</a>.</p>

<form id="searchTattoosForm" class="form-horizontal" action="" method="post">
      
      <input type="text" class="form-control" name="searchTattoos" id="searchTattoos"/>
      <br/>
      <input type="submit" class="btn btn-primary" id="searchTattooSubmit" name="searchTattooSubmit" value="Search" style='background-color:#00ff00;border:none;color:black;'/>
    </form>

</div>




</div><!--end row-->

<div class='row' id='searchResults'>
<div class='col-lg-8 col-lg-offset-2' id='searchResultColumn'>

<?php
	if(isset($_POST['searchCanvasSubmit']))
          {
             $dbconn = new Dbconnect;
             $db = $dbconn->getDb();
             $searchCat = $_POST['searchCanvas'];
             $query = "SELECT * FROM galCanvas WHERE description LIKE '%$searchCat%' OR title LIKE '%$searchCat%' OR keywords LIKE '%$searchCat%' ORDER BY galleryOrder ASC";
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
              echo "Sorry, no results, try changing your search terms.";
              echo "</strong></div>";
              echo "<br/>";
              echo "<br/>";
            }
          }

?>


<?php

    if(isset($_POST['searchTattooSubmit']))
          {
             $dbconn1 = new Dbconnect;
             $db1 = $dbconn1->getDb();
             $searchCat1 = $_POST['searchTattoos'];
             $query1 = "SELECT * FROM galTattoos WHERE description LIKE '%$searchCat1%' OR title LIKE '%$searchCat1%' OR keywords LIKE '%$searchCat1%' ORDER BY galleryOrder ASC";
            $statement1 = $db1->prepare($query1);
            $statement1->bindValue(':%$searchCat1%', '%$searchCat1%', PDO::PARAM_STR);
            $statement1->execute();

            echo "<br/>";
           echo "<h2 style='margin-left:2%;'>Search Term: " . $searchCat1;
            echo "</h2>";
            echo "<br/>";

          echo "<div class='row'>";

            $increment = 0;

          if (!$statement1->rowCount() == 0)
            {
              while ($results = $statement1->fetch())
              {
                  if($increment%4==0)
                  {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-3' style='left:2%;margin-bottom:30px;'>";
                    echo "<p style='margin-left:15%;'>Title: " . $results['title'] . "</p>";
                    echo "<img src='images/gallery/" . $results['url'] . "' style='width:70%;margin-left:15%;'>";
                    echo "</div>";
                    $increment++; 
                  }
                  else if(!$increment%4==0)
                  {
                    echo "<div class='col-md-3' style='left:2%;margin-bottom:30px;'>";
                    echo "<p style='margin-left:15%;'>Title: " . $results['title'] . "</p>";
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
              echo "Sorry, no results, try changing your search terms.";
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