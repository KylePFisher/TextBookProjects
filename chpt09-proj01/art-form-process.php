

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="chapter09-project01.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
</head>

<body>

<?php include 'art-header.inc.php' ?>

<div class="container">


   
   <div class="row">
      <div class="col-md-3">
      
         <div class="panel panel-default">
           <div class="panel-heading">Account</div>
           <div class="panel-body">

           <ul class="nav nav-pills nav-stacked">
                <?php
                    $sidebarlist = array("Login", "Register", "Password Recovery", "My Account",
                    "Return", "Order History");
                    // foreach ($sidebar as $value)
                    // {
                    //     echo "<li>Bob</li>";
                    // }
                ?>
           </ul>  
           
           
           </div>
         </div>      

      </div>
      <div class="col-md-9">
      
         <div class="page-header">
            <h2>My Account</h2>
            <?php
            echo "<p>Welcome " . $_POST["first"] . " " . $_POST["last"] . "</p> "
            ?>
         </div>
         
         <div class="well">
            <?php
            echo "<p>Email: " . $_POST["email"] . "</p> ";
            echo "<p>First Name: " . $_POST["first"] . "</p> ";
            echo "<p>Last Name: " . $_POST["last"] . "</p> ";
            if(isset($_POST['privacy']))
            {
                 echo "<p>Agreed to privacy policy? <strong>Yes</strong></p> ";
            }
            else
            {
                 echo "<p>Agreed to privacy policy? <strong>No</strong></p> ";
            }
            ?>
         </div>
      </div>  
   </div> 
      

   


</div>  <!-- end container -->

<?php include 'art-footer.inc.php' ?>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>
