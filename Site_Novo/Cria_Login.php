<?php
$conexao = mysqli_connect('localhost', 'root', '', 'bd_antigo');

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    die('Erro na conexão com o banco de dados: ' . mysqli_connect_error());
}

// Recebe os dados do formulário
$login = $_POST['Login'];
$senha = $_POST['Senha'];


$sql = "INSERT INTO login (Login, Senha) VALUES ('$login', '$senha')";

if (mysqli_query($conexao, $sql)) {
    header("Location: Dados_SalvosLogin.html");
} else {
    echo 'Erro ao inserir dados: ' . mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);

?>
