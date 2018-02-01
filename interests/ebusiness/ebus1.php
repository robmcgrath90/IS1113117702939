<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="cost_calc.js"></script>
       
    </head>
    
    <body>
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="post" action="ebus2".pho>
            
            <label for ="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            salesforce @ $100
            </label>
            
            <br/>
            
            <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            AWS @ $300
            </label>   
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
             <input type="text" id="subtotal" value="0.00" readonly/>
            </label>     
                
            <br/>
            
            <label for="total">
                total
                <input type="text" id="total" value=0.00 readonly/>
            </label>
    
            <br/>
            
            <button type="submit" id="btnproceed" disabled>add to shopping cart</button>
            
            </form>
            
            <br/>
            <button onclick="calcSub()">Calculate Cost</button>
            <a role="button" href="ebus1.php">clear choice</a>
            
    </body>
</html>