<?php 

$sql = "SELECT artists.ArtistID, artists.FirstName, artists.LastName, artworks.ArtWorkID, artworks.ImageFileName FROM artists JOIN artworks
ON artists.ArtistID = artworks.ArtistID WHERE artists.ArtistID =" . $artist;
$result2 = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result2);

?>

<?php
echo "<h3>Art by ". $row["FirstName"] . " " . $row["LastName"] ."</h3>";
?>

<div class="row">

   <?php
   while ($ArtByArtistRow = mysqli_fetch_assoc($result2))
   {
    echo "<div class=\"col-md-3\">
      <div class=\"thumbnail\">
         <img src=\"images/art/works/square-medium/". $ArtByArtistRow["ImageFileName"] .".jpg\" title=\"\" alt=\"\" class=\"img-thumbnail img-responsive\">
         <div class=\"caption\">
            <a class=\"btn btn-primary btn-xs\" href=\"display-art-work.php?id=". $ArtByArtistRow["ArtWorkID"] ."\"><span class=\"glyphicon glyphicon-info-sign\"></span> View</a>
            <button type=\"button\" class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-gift\"></span> Wish</button>
            <button type=\"button\" class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Cart</button>
         </div>
      </div>
   </div>";
   }
   ?>


 
            
</div>  <!-- end artist's works row -->