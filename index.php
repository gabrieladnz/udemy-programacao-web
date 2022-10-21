<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"> <!-- Conectar o arquivo CSS ao index-->
    <title>Programação PHP</title>

    <!-- Estilo do formulário -->
    <style type="text/css">

        .formulario {
            background-color: #808080;
            color: #fff;
            text-shadow: 2px 2px #000;
            padding: 10px;
            font-size: 1.9rem;
            font-weight: bold; /* Nome em negrito */
        }

        input {
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px; /* DEIXA A CAIXA REDONDA!!! */
            border: solid; /* Mostra a borda da caixa */
            font-weight: bold;
        }
    </style>

<body>
    <!-- cabeçalho da página-->
    <header>
        <h3>PROGRAMAÇÃO PHP</h3>
        <h4>CURSO UDEMY</h4>
    </header>
    <br>

    <!-- define uma seção pra página-->
    <section>

        <h1>Programação PHP</h1>

        <!-- criando div -->
        <div class="formulario">

            <!-- criando formulário -->
            <form action="analise.php" method="get" target="">

                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome"><br><br>
                <label for="salario">Salário:</label><br>
                <input type="text" id="salario" name="salario" placeholder="Insira seu atual salário"><br><br>
                <input type="submit" name="enviar">

            </form>

        </div>

        <!---------------------- Incluindo PHP no HTML -->
        <!--
        <php
        // variáveis:
        $nome = "Gabriela";
        $idade = "22";
        $cidade = "Recife";

        $nota1 = "6";
        $nota2 = "7";

        $media = ($nota1+$nota2) / 2;

        // função que imprime
        echo "<br>Olá $nome, atualmente você mora em $cidade e tem $idade anos! <br><br>";
        echo "Sua nota 1 foi: $nota1<br> Sua nota 2 foi: $nota2 <br> Sua média é: <b>$media</b>."
        ?> -->

    </section>
    <br>


    <!-- rodapé da página-->
    <footer>
        <h3>CURSO UDEMY</h3>
        <h4>Programação PHP com HTML, CSS e PHP</h4>
        <br>
        <p class="texto-rodape">Contatos</p>
        <p class="texto-rodape">Email: gadisa10@outlook.com</p>
        <p class="texto-rodape">WhatsApp: (87) 9605-8064</p>
        <br>
        <p class="texto-rodape">Desenvolvido por mim</p>
        <p class="texto-rodape">CNPJ: 66.666/6666.66</p>
    </footer>

</body>

</html>