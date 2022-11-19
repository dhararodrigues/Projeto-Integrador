<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'conectabanco.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $banco = "INSERT INTO cliente (cpf, nome, endereco, telefone, email) VALUES ('$cpf','$nome', '$endereco', '$telefone', '$email')";
    $result = pg_query($banco);
    if( $result == 6){
        echo 'Cliente cadastrado com sucesso! :)';
    } else {
        echo 'Falha ao cadastrar cliente! :(';
    }
    /*if (str_contains('A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z', 'a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z', '0, 1, 2, 3, 4, 5, 6, 7, 8, 9', '!, @, #, $, %, &, *, +, =, -, [, ], {, }, ~, ^, ?, /, ;, :, "')) {
        echo 'Senha cadastrada com sucesso';
    } else {
        echo 'Erro ao cadastrar senha';
    }*/

    ?>
</body>
</html>