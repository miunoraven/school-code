var inputMailElement = document.querySelector("#input-email");
var inputMailConfirmElement = document.querySelector("#input-conf-mail");
var inputPasswordElement = document.querySelector("#input-pass");
var intputPassConfirmElement = document.querySelector("#input-conf-pass");
var buttonElement = document.querySelector(".button-register");
var buttonLinkElement = document.querySelector(".link_button");

var errorMailElement = document.querySelector(".error_mail");


var user = { 
    email: "r0797856@student.thomasmore.be",
    password: "hello" 
};

buttonElement.addEventListener("click", function(){
    var given_mail = inputMailElement.value;
    var given_pass = inputPasswordElement.value;
    if(given_mail == user.email){
        alert("nice alvast in de if");
        var errorMailPElement = document.querySelector(".error_mail p");
        if(errorMailPElement == null){
            alert("yoooooooooo");
            var errorElement = document.createElement("p");
            errorElement.innerHTML= "There is already an account on this e-mail. Try another e-mail"
            errorMailElement.append(errorElement);
        }
    }
    alert("nope not happening");
});


