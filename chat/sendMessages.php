<?php
session_start();
$username = "root";
$password = "";
$con = new PDO('mysql:host=localhost;dbname=chat', $username, $password);
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    $username = "Anonyme";
}
$message = htmlspecialchars($_GET['msg']);
$newmessage = str_replace('_', ' ', $message);
$sendMessage = $con->prepare("INSERT INTO `message` (`username`,`message`) VALUES ('$username','$newmessage')");
$sendMessage->execute();
$con = null;
?>