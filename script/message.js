var receiver_id;

function showMessages(u_id,value){
    receiver_id="";
    var user=u_id.concat(value);
    var getUser=document.getElementById(user);
    //console.log(getUser.innerText);
    receiver_id=getUser.innerText;
    getFromDatabase(receiver_id);
    //console.log(receiver_id);
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

function sendData(){
    var mes=document.getElementById("data").value;
    var rec=receiver_id;
    document.getElementById("data").value="";
    //console.log(rec,mes);
    //getFromDatabase(rec);
    sendToDatabase(mes,rec);
}

function sendToDatabase(mes,rec){
    var data={
        message:mes,
        receiveId:rec
    };
    fetch("/ChatApp/php/send_message.php",{
        method:"POST",
        body: JSON.stringify(data),
        headers: {
                "Content-Type": "application/json",
        },
        
    })
    .then((response) => response.text())
    //.then((data) => alert(data));
    getFromDatabase(rec);
}

function getFromDatabase(rec){
    var data={
        receiveId:rec
    };
    fetch("/ChatApp/php/get_message.php",{
        method:"POST",
        body: JSON.stringify(data),
        headers: {
                "Content-Type": "application/json",
        },
        
    })
    .then((response) => response.text())
    .then((data) => document.getElementById("message_send").innerText=data);
}