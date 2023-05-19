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
    $query_usuarios = "SELECT id, nome, email, data_nascimento
                         FROM usuarios
                        WHERE DAY(data_nascimento) = DAY(CURDATE())
                          AND MONTH (data_nascimento) = MONTH(CURDATE())
                        LIMIT 1
                         ";

    $result_usuarios =  $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    if (($result_usuarios) and ($result_usuarios->rowCount() != 0)) {
        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
            extract($row_usuario);
            echo "ID: $id <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: " . date('d/m/Y', strtotime($data_nascimento)) . " <br>";

            // codifica os dados no formato de um formulário www
            $mensagem = urlencode("$nome, PARABENS!!! A Gabriel Desenvolvimento deseja a voce um Feliz Aniversario, com muita alegria, sucesso e saude.");
            // concatena a url da api com a variável carregando o conteúdo da mensagem
            $url_api = "http://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=gabrielmatheus@casasandreluiz.org.br&senha=zika2023&celular=11955772940&mensagem={$mensagem}";
            // realiza a requisição http passando os parâmetros informados
            $api_http = file_get_contents($url_api);
            // imprime o resultado da requisição
            echo $api_http;

            echo "<hr>";

            // var_dump(($row_usuario));
        }
    } else {
        echo  "<p style='color: #f00;'>Nenhum aniversariante encontrado</p>";
    }

    ?>

</body>

</html>