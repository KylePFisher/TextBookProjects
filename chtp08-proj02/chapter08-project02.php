<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter08-project02.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>
<!-- 
   Kyle Fisher
   Chapter 8, Project 2
   INFO 2900 6A
   Brown, McCune, Paschall, Rosas 
   1/12/17
-->

<?php
include "art-header.inc.php";
include "art-functions.php";
include "art-data.php";
?>

<div class="container">

      <div class="page-header">
         <h2>View Cart</h2>
      </div>
         
      <table class="table table-condensed">
         <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
         </tr>
         <?php
            outputCartRow($file1, $product1,
            $quantity1, $price1);
            outputCartRow($file2, $product2,
            $quantity2, $price2);
         ?>
   
            <tr class="success strong">
               <td colspan="4" class="moveRight">Subtotal</td>
               <?php
                  outputCheckoutRow($subtotal);
               ?>
            </tr>
            <tr class="active strong">
               <td colspan="4" class="moveRight">Tax</td>
               <?php
                  outputCheckoutRow($tax);
               ?>
            </tr>  
            <tr class="strong">
               <td colspan="4" class="moveRight">Shipping</td>
               <?php
                  outputCheckoutRow($shipping);
               ?>
            </tr> 
            <tr class="warning strong text-danger">
               <td colspan="4" class="moveRight">Grand Total</td>
               <?php
                  outputCheckoutRow($grandtotal);
               ?>
            </tr>    
            <tr >
               <td colspan="4" class="moveRight"><button type="button" class="btn btn-primary" >Continue Shopping</button></td>
               <td><button type="button" class="btn btn-success" >Checkout</button></td>
            </tr>
      </table>         

</div>  <!-- end container -->

<?php
include "art-footer.inc.php";
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
  </body>
</html>
