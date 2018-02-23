/* global $ */

function validateDetails() {
    
    var pin 
    var name
    var email
    
    
    pin= document.getElementById("user_pin").value;
    name=document.getElementById("name").value;
    email=document.getElementById("email").value;
    
    if(pin == ""){
        alert("please enter your PIN")
    }
    else if(String(pin).length < 4){
        alert("please make sure your pin is accurate");
        
    }
    else{
        enablebtnPurchase();
        
    }
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
    
}

function disablebtnPurchase(){
    $('#btnPurchase').prop('disabled', true);
}