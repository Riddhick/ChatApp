function showMessages(u_id,value){
    var user=u_id.concat(value);
    var getUser=document.getElementById(user);
    //console.log(getUser.innerText);
}
function openPrompt(value){
   // var f_id= document.getElementById("friend-id");
    var receiver=document.getElementById("receiver-name");
    var f_id="friend-id";
    var u_id="user-id"
    let newid=f_id.concat(value);
    receiver.innerText="";
    //console.log(newid);
    var name=document.getElementById(newid);
    receiver.style.display="flex";
    receiver.innerText=name.innerText ;
    showMessages(u_id,value);
}