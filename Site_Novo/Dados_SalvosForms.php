<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Contato</title>
    <style>
        body {
            background-color: #fff8e1;
            color: #4e342e;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header-text {
            color: #d32f2f;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .content-section {
            background-color: #ffeb3b;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .content-section img {
            border-radius: 10px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .content-section h2 {
            color: #d32f2f;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .content-section p {
            color: #6d4c41;
            font-size: 1.1em;
            line-height: 1.6;
            text-align: justify;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .carousel-container {
            background-color: rgba(255, 235, 59, 0.8);
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner img {
            height: 300px;
            object-fit: cover;
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: black;
        }

        .navbar {
            background-color: #d32f2f;
        }

        .navbar-nav {
            width: 100%;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            transition: all 0.3s ease;
            padding: 10px 20px;
            text-align: center;
        }

        .navbar-nav .nav-link:hover {
            background-color: #f44336;
            color: #ffeb3b !important;
            border-radius: 4px;
            transform: scale(1.1);
        }

        #logo {
            display: block;
            margin: 0 auto 10px;
        }

        .navbar-collapse {
            flex-grow: 0;
        }

        iframe {
            display: block;
            margin: 0 auto;
            margin-top: 30px;
            border: 0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            color: #d32f2f;
            font-weight: bold;
            text-align: center;
        }

        .container p {
            color: #6d4c41;
            font-size: 1.1em;
            line-height: 1.6;
            text-align: justify;
        }

        .btn-custom {
            background-color: #d32f2f;
            border-color: #d32f2f;
        }

        /* Estilo para os radio buttons */
        .radio-label {
            color: #6d4c41;
            /* Cor do texto dos radio buttons */
            font-size: 1em;
            /* Tamanho do texto dos radio buttons */
            margin-right: 10px;
            /* Espaçamento direita dos radio buttons */
        }

        .radio-input {
            margin-right: 5px;
            /* Espaçamento direita dos radio buttons */
        }

        .radio-label::before {
            width: 20px;
            /* Tamanho do círculo dos radio buttons */
            height: 20px;
            /* Tamanho do círculo dos radio buttons */
            top: -1px;
            /* Posicionamento vertical do círculo dos radio buttons */
            left: -4px;
            /* Posicionamento horizontal do círculo dos radio buttons */
            border-radius: 50%;
            /* Forma do círculo dos radio buttons */
        }

        .radio-input:checked+.radio-label::before {
            background-color: #d32f2f;
            /* Cor de fundo do círculo dos radio buttons selecionados */
            border-color: #d32f2f;
            /* Cor da borda do círculo dos radio buttons selecionados */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-column">
            <img id="logo" src="img/logo.png" style="height: 2cm; width: 4cm;" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Novo_Home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Novo_QuemSomos.html">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Novo_Produto.html">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Novo_Localizacao.html">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Novo_Contato.html">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">


        <div class="content-section">
            <h2 class="text-center">Dados salvos</h2>

            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid flex-column">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="Formulario.html">Voltar para a pagina do Formulario</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="content-section">

            <?php


            $mysqli = new mysqli("localhost", "root", "", "bd_antigo");

            if ($mysqli->connect_errno) {
                die("Falha na conexão: " . $mysqli->connect_error);
            }



            $conexao = mysqli_connect('localhost', 'root', '', 'bd_antigo');

            // Verifica se a conexão foi bem-sucedida
            if (!$conexao) {
                die('Erro na conexão com o banco de dados: ' . mysqli_connect_error());
            }

            // Consulta SQL para buscar os dados da tabela 'usuario'
            $consulta = "SELECT * FROM forms_vagas WHERE Nome = '$nome'";
            $resultado = $mysqli->query($consulta) or die($mysqli->error);

            ?>

            <table class="table table-bordered text-center">
                <thead>
                    <tr>

                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Logradouro</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Área</th>


                    </tr>
                </thead>

                <?php while ($dado = $resultado->fetch_array()) { ?>
                    <tbody>

                        <tr>
                            <td><?php echo $dado['Nome']; ?></td>
                            <td><?php echo $dado['Sobrenome']; ?></td>
                            <td><?php echo $dado['Email']; ?></td>
                            <td><?php echo $dado['Telefone']; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($dado['Dt_Nasc'])); ?></td>
                            <td><?php echo $dado['Logradouro']; ?></td>
                            <td><?php echo $dado['Numero']; ?></td>
                            <td><?php echo $dado['Cidade']; ?></td>
                            <td><?php echo $dado['Area']; ?></td>

                            




                        </tr>
                    <?php } ?>
            </table>
</body>

</html>


</div>
</div>
<footer>
    <p class="text-center text-white">&copy; 2024 Chingling - Todos os direitos reservados</p>
</footer>
</body>

</html>