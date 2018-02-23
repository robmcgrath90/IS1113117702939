<!DOCTYPE html>
<html>
    <head>
        <title>Select a Product</title>
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="cost_calc.js"></script>
       		<link rel="stylesheet" type="text/css" href="../main.css" />
	   
	   <style>
	   form{
		  
		  text-align:left; 
	   }
	   
	   </style>
	  
    </head>
    
    <body>
	<div id="container">
    <div id="header">
		<h1>1113117702939 - IS1113 Project! </h1>
	</div>
	
	
	<div id="nav">
	<ul>
	<li><a href="indexCloud.html">Home</a></li>
	<li><a href="about.html">About</a></li>
	<li><a class="active" a href="ebus1.php">Products</a></li>
	<li><a href="../index.html">Personal Site</a></li>
	
	</li>
	</ul>
	
	</div>
	
	
            
            <br/>
            
            <form method="post" name ="form1" action="ebus2.php" >
            <table>
            
			<h4>Select a Product</h4>
			<tr>
             <td><label for ="salesforce"></td>
            <td><input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            salesforce @ $100
            </label></td>
            </tr>
            
            <br/>
            <tr>
		    <td><label for ="cloud"></td>
            <td><input type="radio" id="cloud" name="product" onClick="disablebtnProceed()"/>
            cloud 9 @ $200
            </label></td> 
            </tr>
            
            <br/>
			<tr>
			<td><label for ="aws"></td>
            <td><input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web Service WS @ $300
            </label> </td> 
			</tr>
			<br/>
			
			<tr>
			<td><label for ="gmail"></td>
            <td><input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
            gmail @ $400
            </label></td>
            	</tr>
			</table>
			
			<br/>
            <br/>
            
             <table>
        <tr>
            <td><label for="subtotal"> Sub Total </label></td>
            <td><input type="text" id="subtotal" value="0.00" readonly/></td>
        </tr>
         <tr>
            <td><label for="dis"> Discount </label></td>
            <td>  <input type="text" id="dis" value="0.00" readonly/>         </td>
        </tr>
        <tr>
        <td><label for="vat">vat</label></td> 
          
        <td><input type="text" id="vat"  value="0.00" readonly/>             </td>
        </tr>
         <tr>
         <td><label for="total">Total</label></td>
         <td><input type="text" id="total" name="total" value="0.00" readonly/></td>
        </tr>
        <tr>
            <td> <button type="submit" id="btnproceed" disabled>add  to shopping cart</button></td>
        </tr>
		</table>
		
            </form>
            
            <br/>
			 <button onclick="calcSub()">Calculate Cost</button>
           
			
			
            <a role="button" href="ebus1.php">clear choice</a>
		
	<div id="footer">
		copyright &copy; Robert McGrath
	</div>

			
			
			
            
            
    </body>
</html>