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
        header {
            position: fixed;
            width: 100%;
        }

        .formulario {
            color: #000;
            padding: 10px;
            font-size: 1.9rem;
            font-weight: bold;
            text-align: right;
            /* Nome em negrito */
        }

        input {
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
            /* DEIXA A CAIXA REDONDA!!! */
            border: solid;
            /* Mostra a borda da caixa */
            font-weight: bold;
        }

        h2 {
            text-align: left;
            padding: 10px;

        }

        #enviar {
            background-color: rgba(0, 255, 0, 1.0);
        }

        p {
            font-size: 1.6rem;
            padding: 10px;
        }

        #grid-container {
            background-color: rgba(0, 0, 255, 0.15)
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 5px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid div {
            font-size: 1.6rem;
            text-align: center;
            background-color: rgba(255, 255, 255, 1.0);
        }
    </style>

<body>
    <!-- cabeçalho da página-->
    <header>
        <h3>PROGRAMAÇÃO PHP</h3>
        <h4>CURSO UDEMY</h4>
    </header>
    <br><br><br><br><br><br>

    <!-- define uma seção pra página-->
    <section>

        <h1>Aluguel de veículos</h1>
        <h2>Página de Exemplo - Curso PHP</h2>

        <!-- criando div -->
        <div class="formulario">

            <!-- criando formulário -->
            <!-- REFERENCIANDO PÁGINA ANALISE.PHP -->
            <form action="analise.php" method="get" target="">
                <!-- Método GET - EXIBE OS DADOS NA URL
                     Método POST - É MAIS SEGURO -->

                <label for="pesquisa">Pesquisar</label>&nbsp

                <input type="text" id="pesquisa" name="pesquisa" placeholder="Insira aqui a sua pesquisa">

                <input type="submit" id="enviar" name="enviar" value="OK"><br>

            </form>

        </div>
        <br><br>

        <section class="container" id="grid-container">
            <div class="grid">

                <div>Conteúdo 1</div>
                <div>Conteúdo 2</div>
                <div>Conteúdo 3</div>
                <div>Conteúdo 4</div>
                <div>Conteúdo 5</div>
                <div>Conteúdo 6</div>

            </div>
        </section>

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