var buttonElement = document.querySelector(".button-signin");
var inputMailElement = document.querySelector("#input-email");
var inputPasswordElement = document.querySelector("#input-pass");
var linkHtmlElement = document.querySelector(".link_button");
var errorDivElement = document.querySelector(".error");
var errorPElement = document.querySelector(".error p");

var user = { 
    email: "r0797856@student.thomasmore.be",
    password: "hello" 
};

buttonElement.addEventListener("click", function(){
    var given_email = inputMailElement.value;
    var given_pass = inputPasswordElement.value;

    if(given_email == user.email && given_pass == user.password){
        linkHtmlElement.href="search_flight_numb.html";
    }
    else{
        var errorPElement = document.querySelector(".error p");
        if(errorPElement == null){
            var errorElement = document.createElement("p");
            errorElement.innerHTML= "The e-mail address or password is wrong. Try again."
            errorDivElement.append(errorElement);
        }
    }
});
