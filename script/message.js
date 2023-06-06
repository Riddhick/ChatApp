function openPrompt(value){
   // var f_id= document.getElementById("friend-id");
    var receiver=document.getElementById("receiver-name");
    var f_id="friend-id";
    let newid=f_id.concat(value);
    receiver.innerText="";
    //console.log(newid);
    var name=document.getElementById(newid);
    receiver.style.display="flex";
    receiver.innerText=name.innerText ;
}