<?php

include_once './conexao.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Aniversariantes</title>
</head>

<body>
    <h1 class="display-4">Listar Aniversariantes do Dia</h1>

    <?php
    $query_usuarios = "SELECT * FROM usuarios ";

    $result_usuarios =  $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    if (($result_usuarios) and ($result_usuarios->rowCount() != 0)) {
    }

    ?>

</body>

</html>