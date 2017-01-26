<?php

include('open_db_connection.php');
$page = $_SERVER['PHP_SELF'];

$sql = "SELECT artworks.ArtWorkID, artworks.Title, artworks.ImageFileName, artworks.Description, artworks.MSRP, artworks.YearOfWork,
artworks.Medium, artworks.Width, artworks.Height, artworks.OriginalHome, genres.GenreName, subjects.SubjectName,
 artists.FirstName, artists.LastName, artists.ArtistID
 FROM artworks JOIN artists ON artworks.ArtistID = artists.ArtistID
 JOIN artworkgenres ON artworks.ArtWorkID = artworkgenres.ArtWorkID
 JOIN genres ON artworkgenres.GenreID = genres.GenreID
 JOIN artworksubjects ON artworks.ArtworkID = artworksubjects. ArtworkID
 JOIN subjects ON artworksubjects.SubjectID = subjects.SubjectID WHERE artworks.ArtWorkID =" . $_GET['id'];
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
$artist = $row["ArtistID"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 11</title>

    <!-- Bootstrap core CSS  -->    
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php include 'includes/art-header.inc.php'; ?>

<div class="container">
   <div class="row">

      <div class="col-md-10">
         <h2>
             <?php echo $row["Title"] ?>
         </h2>
         <?php
         echo "<p>By "  . "<a href=\"display-artist.php?id=". $row["ArtistID"] ."\">" . $row["FirstName"] . " " . $row["LastName"] ."</a></p>";
         ?>
         <div class="row">
            <div class="col-md-5">
                <?php
                echo "<img src=\"images/art/works/medium/" . $row["ImageFileName"] . 
                ".jpg\" class=\"img-thumbnail img-responsive\" alt=\"" . $row["Title"] . "\"/>"
               ?>
            </div>
            <div class="col-md-7">
               <p>
                <?php
                echo $row["Description"];
                ?>
               </p>
               <?php
                echo "<p class=\"price\">$".  money_format('%i', $row['MSRP']) ."</p>";
               ?>
               <div class="btn-group btn-group-lg">
                 <button type="button" class="btn btn-default">
                     <a href="#"><span class="glyphicon glyphicon-gift"></span> Add to Wish List</a>  
                 </button>
                 <button type="button" class="btn btn-default">
                  <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Shopping Cart</a>
                 </button>
               </div>               
               <p>&nbsp;</p>
               <div class="panel panel-default">
                 <div class="panel-heading"><h4>Product Details</h4></div>
                 <table class="table">
                    <?php
                   echo "<tr>
                     <th>Date:</th>
                     <td>". $row["YearOfWork"] ."</td>
                   </tr>
                   <tr>
                     <th>Medium:</th>
                     <td>". $row["Medium"] ."</td>
                   </tr>  
                   <tr>
                     <th>Dimensions:</th>
                     <td>" . $row["Width"] . " cm X " . $row["Height"] . " cm" . "</td>
                   </tr> 
                   <tr>
                     <th>Home:</th>
                     <td><a href=\"#\">" . $row["OriginalHome"] . "</a></td>
                   </tr>  
                   <tr>
                     <th>Genres:</th>
                     <td>". $row["GenreName"] ."</td>
                   </tr> 
                   <tr>
                     <th>Subjects:</th>
                     <td>". $row["SubjectName"] . "<br>"; 
                     while ($row = mysqli_fetch_assoc($result))
                     {
                        echo $row["SubjectName"] ."<br>";
                     }
                     echo"</td></tr>";
                   ?>
                 </table>
               </div>                              
               
            </div>  <!-- end col-md-7 -->
         </div>  <!-- end row (product info) -->

 
         <?php include 'includes/art-artist-works.inc.php'; ?>
                     
      </div>  <!-- end col-md-10 (main content) -->
      
      <div class="col-md-2">   
         <?php include 'includes/art-shopping-cart.inc.php'; ?>
      
         <?php include 'includes/art-right-nav.inc.php'; ?>
      </div> <!-- end col-md-2 (right navigation) -->           
   </div>  <!-- end main row --> 
</div>  <!-- end container -->

<?php include 'includes/art-footer.inc.php'; ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.0.0/assets/js/jquery.js"></script>
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>    
  </body>
</html>
