<?php
 // Start the session
 session_start();
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        	<link rel="stylesheet" type="text/css" href="main2.css" />
        
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
        
        <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="POST">
                    
                    <table>
                    <tr>
                    
					<td><label>Card Type</label></td>
					
					<td><select>
					<option value="credit">Credit card</option>
					<option value="visa/debit">Visa/Debit card</option>
					<option value="master">Master Card</option>
					<option value="visa">Visa card</option>
					</select></td>
					</tr>
					<br/>
					<tr>
					<td><label for="user_pin">PIN:</label></td>
                   
                    <td><input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"></td>
                    </tr>
                    </br>
                    <tr>
					 <td><label for="card">Card Number:</label></td>
					 <td><input type="text" id="card" placeholder="Enter Card Number"maxlength="16" name="name"></td>
					 </tr>
					 <br/>
                    <tr>
					 <td><label for="name">Name:</label></td>
					 <td><input type="text" id="name" name="name"></td>
					 </tr>
					 <br/>
					 <tr>
					 <td><label for ="email">Email:</label></td>
					 <td><input type="text" id="email" name="email"></td>
					 </tr>
					 </table>
					 <br/>
                    

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <?php
                $_SESSION["total"] = $_POST["total"];
                $_POST["email"] = $_post["total"];
                $_POST["name"] = $_post["name"];
            ?>
            
            
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            </div>
            </div>
             <div id="c3">
             <img  src="../images/payments.jpeg" alt="reciept" width="250px" height="250px" >
            </div>
            
            
        	<div id="footer">
	    	copyright &copy; Robert McGrath
        	</div>

        
        
    </body>
</html>
