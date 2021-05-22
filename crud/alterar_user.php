<?php
    include_once("conectar.php");

    $id = $_GET['id'];
    
    $select = "SELECT * FROM `users` WHERE `cod`='$id'";
    
    $result = $conexao->query($select);
    
    while($var = mysqli_fetch_array($result)){
        $cod = $var['cod'];
        $nome = $var['nome'];
        $email = $var['email'];
        $tel = $var['tel'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/inserir.css">
    <title>Alterar o usuário</title>
</head>
<body>
    <form action="atualizar_tabela.php" method="POST" class="tela">
        <h1>Editar:</h1>
        <input type="hidden" name="cod" value="<?php echo $cod;?>">
        <p>Nome<spam style="color: red;">*</spam></p>
        <input type="text" name="nome" value="<?php echo $nome;?>">
        <br>
        <p>Email<spam style="color: red;">*</spam></p>
        <input type="email" name="email" value="<?php echo $email;?>">
        <br>
        <p>Telefone<spam style="color: red;">*</spam></p>
        <input type="text" name="tel" value="<?php echo $tel;?>">
        <br>
        <div id="butao">
            <input type="submit" value="alterar">
        </div>    
    </form>
</body>
</html>