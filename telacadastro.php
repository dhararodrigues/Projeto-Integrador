<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Tela de cadastro</title>
</head>
<body>    
    <div id='desktop-1' class='desktop-1'>
            <img src="logo.projeto.png"  width="240" height="220">
        <div id='nomecompleto' class='nomecompleto'>
            <div style = "left: 600px;"class="forms">
                <form action="cadastro.php" method="post" >
                        <label>Nome completo:</label>
                        <input type="text" name="nome" required maxlength="30" minlength="10">
                        <p></p>
                        <label>Email:</label>
                        <input type="text" name="email" required maxlength="50" minlength="11">
                        <p></p>
                        <label>Senha</label>
                        <input type="password">
                        <p></p>
                        <label>CPF:</label>
                        <input type="number" name="cpf" required maxlength= "15" minlength="11">
                        <p></p>
                        <label>Telefone:</label>
                        <input type="text" name="telefone" required maxlength="12" minlength="11">
                        <p></p>
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" required maxlength="200" minlength="10">
                        <p></p>
                        <input type="submit">
                    </form>
                </div>

                    <div>
                        <a href="login.php">Fazer login</a>
                <p></p>
                </div>

                    <div>
                        <a href="home.php">Voltar a home</a>
                    <p></p>
                </div>
        </div>
    

    
</body>
</html>

