<?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>   
 <head>
        <title>RECEIPT</title>
     </head>
     <body>
         <h4>RECEIPT</h4>
                 
         <?php
         // Echo session variables that were set on previous page
         echo "Total is " . $_SESSION["total"] . "<br>.";
         echo "Email: " . $_POST["email"] . "<br>";
         echo "Name " . $_POST["name"] . "<br>";
         ?>
     </body>
 </html> 