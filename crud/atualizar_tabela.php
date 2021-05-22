<?php
    include_once("conectar.php");

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $alt = "UPDATE users SET nome = '$nome', email = '$email', tel = '$tel' WHERE cod = '$cod'";

    if(mysqli_query($conexao,$alt)){
        header('location: index.php');
    }
?>