<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulário SQL</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
        <div class="form">
            <div class="title">Bem-Vindo</div>
            <div class="subtitle">Vamos registrar sua conta!</div>
            <div class="input-container ic1">
                <input id="firstname" class="input" type="text" id="fisrt_name" name="first_name" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">Primeiro Nome</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" class="input" type="text" id="last_name" name="last_name" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Sobrenome</label>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" id="email" name="email" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</>
            </div>
            <button type="text" class="submit">Enviar</button>
        </div>
    </form>
</body>
</html>

<?php

$dados = $_POST;
$erros = [];

if($dados['first_name'] == "") {
    $erros['first_name'] = 'Nome é obrigatório';
}

if ($dados['last_name'] == "") {
    $erros['last_name'] = 'Último nome é obrigatório';
}

if ($dados['email'] == "") {
    $erros['email'] = 'Email é obrigatório';
}

// $nomes = [
//     'Miguel',
//     'Arthur',
//     'Gael',
//     'Théo',
//     'Heitor',
//     'Ravi',
//     'Davi',
//     'Bernardo',
//     'Noah',
//     'Gabriel',
//     'Samuel',
//     'Pedro',
//     'Anthony',
//     'Isaac',
//     'Benício',
//     'Benjamin',
//     'Matheus',
//     'Lucas',
//     'Joaquim',
//     'Nicolas',
//     'Lucca',
//     'Lorenzo',
//     'Henrique',
//     'João',
//     'Rafael',
//     'Henry',
//     'Murilo',
//     'Levi',
//     'Guilherme',
//     'Vicente',
//     'Felipe',
//     'Bryan',
//     'Matteo',
//     'Bento',
//     'João',
//     'Pietro',
//     'Leonardo',
//     'Daniel',
//     'Gustavo',
//     'Pedro',
//     'João',
//     'Emanuel',
//     'João',
//     'Caleb',
//     'Davi',
//     'Antônio',
//     'Eduardo',
//     'Enrico',
//     'Caio',
//     'José',
//     'Enzo',
//     'Augusto',
//     'Mathias',
//     'Vitor',
//     'Enzo',
//     'Cauã',
//     'Francisco',
//     'Rael',
//     'João',
//     'Thomas',
//     'Yuri',
//     'Yan',
//     'Anthony',
//     'Oliver',
//     'Otávio',
//     'João',
//     'Nathan',
//     'Davi',
//     'Vinícius',
//     'Theodoro',
//     'Valentim',
//     'Ryan',
//     'Luiz',
//     'Arthur',
//     'João',
//     'Léonovo',
//     'Ravi',
//     'Apollo',
//     'Thiago',
//     'Tomás',
//     'Martin',
//     'José',
//     'Erick',
//     'Liam',
//     'Josué',
//     'Luan',
//     'Asafe',
//     'Raul',
//     'José',
//     'Dominic',
//     'Kauê',
//     'Kalel',
//     'Luiz',
//     'Dom',
//     'Davi',
//     'Estevão',
//     'Breno',
//     'Davi',
//     'Thales',
//     'Israel'
// ];

// print_r($erros);

$server = 'localhost';
$user = 'root'; 
$password = 'root'; 
$banco = 'mybank';

if ($erros == null) {

    $params = [
        $dados['first_name'],
        $dados['last_name'],
        $dados['email']
    ];

    $sql = "INSERT INTO cadastro 
    (first_name, last_name, email)
    VALUES (?, ?, ?)";

    $connection = new mysqli($server, $user, $password, $banco);
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", ...$params);
    if ($stmt->execute()) {
        echo '<br> Usuário criado com sucesso!';
        unset($dados);
    }
}

# AutoInserir dados na Tabela;

// $int = rand(0, 100);
// $int2 = rand(0, 100);

// $params = [
//     $dados['first_name'] = $nomes[$int],
//     $dados['last_name'] = $nomes[$int2],
//     $dados['email'] = strtolower($nomes[$int]) . '@email.com'
// ];

// $sql = "INSERT INTO cadastro 
// (first_name, last_name, email)
// VALUES (?, ?, ?)";

// $connection = new mysqli($server, $user, $password, $banco);
// $stmt = $connection->prepare($sql);
// $stmt->bind_param("sss", ...$params);
// if ($stmt->execute()) {
//     echo '<br> Usuário criado com sucesso!';
//     unset($dados);
// }

?>