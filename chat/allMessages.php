<?php
session_start();
$username = "root";
$password = "";
$con = new PDO('mysql:host=localhost;dbname=chat', $username, $password);
$selectMessages = $con->prepare("SELECT * FROM `message`");
$selectMessages->execute();
$con = null;
$fetchMessages = $selectMessages->fetchAll();
$rowMessages = $selectMessages->rowCount();
if($rowMessages > 0){
    foreach($fetchMessages as $fetch){
?>
<div id="chatMessage"><?php echo $fetch['username'];?>: <?php echo $fetch['message'];?></div>
<?
    }
}else{
?>
<div>There is no message</div>
<?php
}
?>