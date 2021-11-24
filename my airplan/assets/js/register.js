var inputMailElement = document.querySelector("#input-email");
var inputMailConfirmElement = document.querySelector("#input-conf-email");
var inputPasswordElement = document.querySelector("#input-pass");
var intputPassConfirmElement = document.querySelector("#input-conf-pass");
var buttonElement = document.querySelector(".button-register");
var buttonLinkElement = document.querySelector(".link_button");

var errorMailElement = document.querySelector(".error_mail");
var errorPassElement = document.querySelector(".error_pass");

// hardcoded user
var users = [{ 
    email: "r0797856@student.thomasmore.be",
    password: "hello" 
}];

// when trying to register
buttonElement.addEventListener("click", function(){
    var given_mail = inputMailElement.value;
    var given_confirm_mail = inputMailConfirmElement.value;
    var given_pass = inputPasswordElement.value;
    var given_confirm_pass = intputPassConfirmElement.value;
    var authenticated_mail = false;
    var authenticated_pass = false;


    console.log(users.forEach(user=>user.email));
    //if the email is already in the database
    if(users.find(user => user.email == given_mail)){
        errorMessage(errorMailElement, "There is already an account on this e-mail. Try another e-mail");
        authenticated_mail = false;
    }
    //if the confirmation is wrong
    else if(given_mail !== given_confirm_mail){
        errorMessage(errorMailElement, "Your e-mail addresses are not the same. Confirm again.");  
        authenticated_mail = false;
    }

    //delete the error messages if nothing is wrong
    else{
        errorMailElement.innerHTML="";
        authenticated_mail = true;
    }

    //idem
    if(given_pass != given_confirm_pass){
        errorMessage(errorPassElement, "Your passwords are not the same. Confirm again.");
        authenticated_pass = false;
    }

    else{
        errorPassElement.innerHTML="";
        authenticated_pass = true;
    }

    if(authenticated_mail && authenticated_pass){
        var user = { 
            email: given_mail,
            password: given_pass 
        }; 
        users.push(user);
        buttonLinkElement.href="search_flight_numb.html";
    }

});

//function that displays the error message
function errorMessage(div, message){
    var errorElement = document.createElement("p");
    div.innerHTML="";
    errorElement.innerHTML= message;
    div.append(errorElement);
}


