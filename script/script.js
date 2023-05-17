function SignUp(){
    //console.log("Pressed");
    document.getElementById('login-signup-form').style.display="none";
    document.getElementById('signup').style.display="flex";
}
function Login(){
    document.getElementById('login-signup-form').style.display="none";
    document.getElementById('login').style.display="flex";
}

function Back(obj){
    obj.style.display="none";
    document.getElementById('login-signup-form').style.display="flex";
}