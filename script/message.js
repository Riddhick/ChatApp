function openPrompt(){
    var f_id= document.getElementById("friend-id").innerText;
    var receiver=document.getElementById("receiver-name");
    //console.log(f_id);
    receiver.style.display="flex";
    receiver.innerText=f_id;
}