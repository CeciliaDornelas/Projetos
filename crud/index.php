<?php
    include_once("conectar.php");
    $select = "SELECT * FROM users"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icones-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--estilo.css-->
    <link rel="stylesheet" href="style/estilos.css">
    <!--fonte Itim-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <title>Tabela</title>
</head>
<body>
    <div class="telinha">
        <h1> Usuários cadastrados <h1>
            <div id="butao">
                <button><a href="adicionar_user.html">adicionar um usuário</a></button>
            </div>
            <div class="clear"></div>
            <table class="tabela">
                <tr>
                    <th>usuário</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>ações</th>
                </tr>
        <?php 
            $result = $conexao -> query($select);
            while($var = mysqli_fetch_array($result)):
                $cod = $var['cod'];
                $nome = $var['nome'];
                $email = $var['email'];
                $tel = $var['tel'];
            
                echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$email</td>";
                echo "<td>$tel</td>";
        ?>
            <td><a href='alterar_user.php?id=<?php echo $cod; ?>'><icon class="fas fa-edit"></icon></a></td>
            <td class="acao"><a href='excluir_user.php?id=<?php echo $cod; ?>'><icon class="fas fa-trash-alt"></icon></a></td>
            </tr>
        <?php endwhile; ?>
    </div>
</body>
</html>