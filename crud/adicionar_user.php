<?php
   include_once ("conectar.php");


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    
    $add = "INSERT INTO users (`cod`, `nome`, `email`,`tel`) VALUES (null, '$nome','$email','$tel')";

    if(mysqli_query($conexao, $add)){
        header('location: index.php');
    }

?>