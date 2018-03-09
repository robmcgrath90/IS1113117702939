<!DOCTYPE html>
<html>
    <head>
        <title>Select a Product</title>
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="cost_calc.js"></script>
       		<link rel="stylesheet" type="text/css" href="main2.css"/>
	   
	   <style>
	   form{
		  text-align:left; 
	   }
	   .bCalc {
                  background: #34d968;
                  background-image: -webkit-linear-gradient(top, #34d968, #2bb874);
                  background-image: -moz-linear-gradient(top, #34d968, #2bb874);
                  background-image: -ms-linear-gradient(top, #34d968, #2bb874);
                  background-image: -o-linear-gradient(top, #34d968, #2bb874);
                  background-image: linear-gradient(to bottom, #34d968, #2bb874);
                  -webkit-border-radius: 7;
                  -moz-border-radius: 7;
                  border-radius: 7px;
                  font-family: Arial;
                  color: #ffffff;
                  font-size: 10px;
                  padding: 10px 20px 10px 20px;
                  text-decoration: none;
                }

        .bCalc:hover {
                  background: #3cb0fd;
                  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
                  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
                  text-decoration: none;
                }
        .bClear {
                  background: #eb1111;
                  background-image: -webkit-linear-gradient(top, #eb1111, #f50a0a);
                  background-image: -moz-linear-gradient(top, #eb1111, #f50a0a);
                  background-image: -ms-linear-gradient(top, #eb1111, #f50a0a);
                  background-image: -o-linear-gradient(top, #eb1111, #f50a0a);
                  background-image: linear-gradient(to bottom, #eb1111, #f50a0a);
                  -webkit-border-radius: 9;
                  -moz-border-radius: 9;
                  border-radius: 9px;
                  font-family: Arial;
                  color: #ffffff;
                  font-size: 10px;
                  padding: 10px 20px 10px 20px;
                  text-decoration: none;
                }

        .bClear:hover {
                  background: #46fc3c;
                  background-image: -webkit-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: -moz-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: -ms-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: -o-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: linear-gradient(to bottom, #46fc3c, #34d94d);
                  text-decoration: none;
                }	   
	  .btnp {
                  background: #69eb12;
                  background-image: -webkit-linear-gradient(top, #69eb12, #62f50c);
                  background-image: -moz-linear-gradient(top, #69eb12, #62f50c);
                  background-image: -ms-linear-gradient(top, #69eb12, #62f50c);
                  background-image: -o-linear-gradient(top, #69eb12, #62f50c);
                  background-image: linear-gradient(to bottom, #69eb12, #62f50c);
                  -webkit-border-radius: 9;
                  -moz-border-radius: 9;
                  border-radius: 9px;
                  font-family: Arial;
                  color: #ffffff;
                  font-size: 12px;
                  padding: 2px 29px 5px 29px;
                  text-decoration: none;
                }

      .btnp:hover {
                  background: #46fc3c;
                  background-image: -webkit-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: -moz-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: -ms-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: -o-linear-gradient(top, #46fc3c, #34d94d);
                  background-image: linear-gradient(to bottom, #46fc3c, #34d94d);
                  text-decoration: none;
                }
	   
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
    <li style="float:right"><a href="https://is1113117702939.herokuapp.com/">heroku</a></li>
	</li>
	</ul>
	
	</div>
	<div id="s">
	    
	</div>
	
	        	<div id="main">
            
            <br/>
            
            <form method="post" name ="form1" action="ebus2.php" >
            <table>
            
			<h2>Select a Product</h2>
			<tr>
             <td><label for ="salesforce"></td>
            <td><input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label></td>
            </tr>
            
            <br/>
            <tr>
		    <td><label for ="cloud"></td>
            <td><input type="radio" id="cloud" name="product" onClick="disablebtnProceed()"/>
            Cloud 9 @ $200
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
            Gmail @ $400
            </label></td>
            	</tr>
			</table>
			
			<br/>
            <br/>
            
             <table>
        <tr>
            <td><label for="subtotal"> Sub Total </label></td>
            <td><input type="text" id="subtotal" value="0.00" size="6" readonly/></td>
        </tr>
         <tr>
            <td><label for="dis"> Discount @ 5% </label></td>
            <td>  <input type="text" id="dis" value="0.00"  size="6" readonly/>         </td>
        </tr>
        <tr>
        <td><label for="vat">vat @ 10%</label></td> 
          
        <td><input type="text" id="vat"  value="0.00" size="6" readonly/>             </td>
        </tr>
         <tr>
         <td><label for="total">Total</label></td>
         <td><input type="text" id="total" name="total" value="0.00" size="6" readonly/></td>
        </tr>
        <tr>
        <td> <button class="btnp" type="submit"  id="btnproceed" disabled>Add  to Shopping Cart</button></td>
        </tr>
		</table>
		
		
		
            </form>
            
            <br/>
            
			 <button class="bCalc" onclick="calcSub()">Calculate Cost</button>
            <button class="bClear" role="button"><a href="ebus1.php">clear choice</button>
        </div>
        <div="c3">
            	<img  src="../images/products.jpg" alt="products" width="330px" height="330px" >
		</div>
         
        <div id="space">
	    
     	</div>
		
	<div id="footer">
		copyright &copy; Robert McGrath
	</div>

			
			
			
            
            
    </body>
</html>