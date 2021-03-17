<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Simple chat</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>
        <header>
            <?php
            if(isset($_POST['btnConnect'])){
                if(strlen($_POST['username']) > 0){
                    $_SESSION['username'] = $_POST['username'];
                }
            }
            if(isset($_SESSION['username'])){
                echo "<span style='margin-left: 5px;'>Hello: ".$_SESSION['username']."</span>";
            }else{
                echo "<span style='margin-left: 5px;'>Hello: Anonyme</span>";
            ?>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username, name ...">
                <input class="btn btn-primary" type="submit" name="btnConnect" value="Connect">
            </form>
            <?php
            }
            ?>
            <h1 class="text-center">Simple chat room:</h1>
        </header>
        <div id="MessageBox">
            <div id="Messages">
            </div>
            <input id="message" type="text" name="txtMessage" placeholder="Écrire...."><button id="btnMessage" class="btn btn-success">Send</button>
            <div id="ifErr">
            </div>
        </div>
        <script src="js/jquery-3-4-1.js"></script>
        <script src="js/master.js"></script>
    </body>
</html>