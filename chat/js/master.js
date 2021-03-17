$('#btnMessage').on("click", function(){
    var message = $("#message").val();
    var newStr = message.replace(/\s/g, "_");
    var getMsgField = document.getElementById("message").value = "";
    $("#ifErr").load("sendMessages.php?msg="+newStr);
})

setInterval(viewMessage, 100);
function viewMessage(){
    $("#Messages").load("allMessages.php");
}