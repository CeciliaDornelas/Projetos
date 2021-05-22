<?php
    include_once("conectar.php");
    
    $id = $_GET['id'];

    $del = "DELETE FROM users WHERE cod ='$id'";

    if(mysqli_query($conexao,$del)){
        header('location: index.php');
    }

    
?>