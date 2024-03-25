<?php
    include './conexao.php';
    session_start();
    $message="";
    if(count($_POST)>0) {
        $sql = "SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'";
        $result = mysqli_query($conexao,$sql);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["tipo"] = $row['tipo'];
        } else {
            $message = "Username ou Password inválidos!";
        }
    }
    if(isset($_SESSION["id"])) {
        header("Location:corpo.php");
    }
?>
<html>
    <head>
        <title>User Login</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form name="frmUser" method="post" action="" align="center">
            <div class="message"><?php if($message!="") { echo $message; } ?></div>
            <h3 align="center">Entre com seu login</h3>
            Username:<br>
            <input type="text" name="user_name">
            <br>
            Password:<br>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </body>
</html>