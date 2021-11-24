var buttonElement = document.querySelector(".button-signin");
var inputUsermailElement = document.querySelector("#input-email");
var inputPasswordElement = document.querySelector("#input-pass");
var linkHtmlElement = document.querySelector(".link_to_html");


var user = { 
    usermail: "r0797856@student.thomasmore.be",
    password: "hello" 
};

buttonElement.addEventListener("click", function(){
    var given_email = inputUsermailElement.value;
    var given_pass = inputPasswordElement.value;

    if(given_email == user.usermail && given_pass == user.password){
        linkHtmlElement.href="search_flight_numb.html";
    }
    else{
        alert("lol nope");
    }
})
