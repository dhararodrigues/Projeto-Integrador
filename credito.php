<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="belezapgto.css">
    <title>Cartão de Crédito</title>
</head>
<body>
        <div id='titulo' class='titulo'>
        Cartão de crédito</div>

        <div class="forms">
            <form action="" method="post">
                    Nome completo:
                    <input type="text" name="nome">
                    <p></p>
                    Número do Cartão:
                    <input type="number" name="numerocartao">
                    <p></p>
                    Validade:
                    <input type="date" name="validade">
                    <p></p>
                    CVV:
                    <input type="number" name="cvv">
                    <p></p>
                    Número de Parcelas:
                    <label for="parcelas"></label>
                    <select name="parcelas">
                        <option value="1x">1x sem juros</option>
                        <option value="2x">2x sem juros</option>
                        <option value="3x">3x sem juros</option>
                        <option value="4x">4x sem juros</option>
                        <option value="5x">5x sem juros</option>
                    </select>
                    <p></p>
                    <div class="botaoaplicar"><a href="#" class="btn">Fechar Compra</a></div>
                </form>
                </div>
                <div>
                <a href="telarastreio.php">Clique aqui para rastrear seu pedido</a>
                <p></p>
                <a href="home.php">Home, clique aqui</a>
                </div>
                <img src="logo.projeto.png"  width="240" height="220">
        
</body>
</html>