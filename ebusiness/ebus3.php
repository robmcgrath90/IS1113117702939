<?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>   
 <head>
     
     <link rel="stylesheet" type="text/css" href="main2.css" />
     
        <title>RECEIPT</title>
     
     <style>
            
             
            
            
        </style>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>
     
     <body>
         
  <div id="container">
    <div id="header">
		<h1>Cloud Shop<i class="fa fa-cloud" style="font-size:60px;color:lightblue;text-shadow:2px 2px 4px #000000; float:right;"></i></h1>
	</div>             
      
  <div id="nav">
       
	  <ul>
  	 <li><a href="indexCloud.html">Home</a></li>
  	  <li><a href="about.html">About</a></li>
	    <li><a class="active" a href="ebus1.php">Products</a></li>
	    <li><a href="../index.html">Personal Site</a></li>
	    <li style="float:right"><a href="https://github.com/robmcgrath90/IS1113117702939/graphs/commit-activity">Github</a></li>
     <li style="float:right"><a href="https://is1113117702939.herokuapp.com/">https://is1113117702939.herokuapp.com/</a></li>
  	</li>
	  </ul>
	
	</div>
      
      <div id="main2">
          
      
      
         <h4>RECEIPT</h4>
                   
         <?php
         // Echo session variables that were set on previous page
         echo "Total: " . $_SESSION["total"] . "<br>";
         echo "Email: " . $_POST["email"] . "<br>";
         echo "Name: " . $_POST["name"] . "<br>";
         ?>
          </div>
          
        <div id="c3">
             <img  src="../images/products.jpg" alt="reciept" width="250px" height="250px" >
            </div>
             
         
         <div id="footer">
	    	copyright &copy; Robert McGrath
        	</div>
         
     </body>
 </html> 