// Below function Executes on click of login button.
function validate() {
    var username = document.getElementById("typeEmailX").value;
    var password = document.getElementById("typePasswordX").value;
    if (username == "admin" && password == "admin123") {
        alert("Login successfully");
        window.location = "home.html"; // Redirecting to other page.
        return false;
    }
   else
   {
        alert("The username or password is incorrect. Please Try Again ");
        

   }
    
}