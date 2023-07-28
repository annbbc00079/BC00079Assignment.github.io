function ClearForm(){
    document.getElementsByTagName('form')[0].reset();
}

function ValidateForm(){
    var ProductName = document.getElementById("ProductName").value;
    var ProductPrice = document.getElementById("ProductDescription").value;
    var ProductImage= document.getElementById('ProdcutImage').valua;

    if(ProductName == ""){
        alert("Product name is empty!");
        document.getElementById("ProductName").focus();
        return false;
    }
    else if(ProductPrice == ""){
        alert("Product description is empty!");
        document.getElementById("ProductPrice").focus();
        return false;
    }
    else if(ProductImage= ""){
        alert("Product image is empty!");
        
        return false;
    }
    else{
        return true;
    }
}
function CheckLoginForm(){
    var username = document.getElementById('username').valua;
    var password = document.getElementById('password').valua;


    if(username == ""){
        alert('Username is empty!');
        document.getElementById('username').focus();
        return false;

    }
    else if(password == ""){
        alert('Password is empty!');
        document.getElementById('password').focus();
        return false;
    }
    else{
        return true;
    }
}
