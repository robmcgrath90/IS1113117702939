/* global $ */

function validateDetails() {
    
    var pin 
    var name
    var email
    var 
    
    cards=document.getElementById("card").value;
    pin= document.getElementById("user_pin").value;
    name=document.getElementById("name").value;
    email=document.getElementById("email").value;
    
    if(pin == "" || name == "" ||  email == "" ){
        alert("Please make sure all fields are filled in")
    }
    else if(String(pin).length < 4){
        alert("please make sure your pin is accurate");
        
    }
    else if(String(cards).length < 15){
        alert("please make sure card number is correct (16 digits)")
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