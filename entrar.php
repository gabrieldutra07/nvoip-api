<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

if (isset($entrar)) {

    if($login == "admin" && $senha == "nvoip2021") {
        setcookie("login",$login);
        header("Location:index.html");
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
    }

}
?>