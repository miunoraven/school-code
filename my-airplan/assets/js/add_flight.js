var buttonElement = document.getElementById("add_account");

buttonElement.addEventListener("click", function(){
    fetch("", {
        method: "POST",
        headers: {'Content-Type': 'application/json'}, 
        body: JSON.stringify(data)
      }).then(res => {
        console.log("Request complete! response:", res);
    });
});