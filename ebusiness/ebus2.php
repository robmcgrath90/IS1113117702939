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
        
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="POST">

					<label>Card Type</label>
					
				    	<select>
					
					<option value="credit">Credit card</option>
					<option value="visa/debit">Visa/Debit card</option>
					<option value="master">Master Card</option>
					<option value="visa">Visa card</option>
					</select>
					<br/>
					 <label for="name">Name:</label>
					 <input type="text" id="name" name="name">
					 <br/>
					 <label for ="email">Email:</label>
					 <input type="text" id="email" name="email">
					 <br/>
                    <label for="user_pin">PIN:</label>
                   
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <?php
                $_SESSION["total"] = $_POST["total"];
                $_POST["email"] = $_post["total"];
                $_POST["name"] = $_post["name"];
            ?>
            
            
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            

        
        
    </body>
</html>
