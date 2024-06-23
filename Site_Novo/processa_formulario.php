<?php
include('Login.php');
// Conexão com o banco de dados (substitua pelos seus dados)
$conexao = mysqli_connect('localhost', 'root', '', 'bd_antigo');

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    die('Erro na conexão com o banco de dados: ' . mysqli_connect_error());
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dt_nasc = $_POST['nascimento'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$area = $_POST['area'];



// Insere os dados na tabela (substitua pelos seus nomes de tabela e colunas)
$sql = "INSERT INTO forms_vagas (Nome, Sobrenome, Email, Telefone, Dt_Nasc, Logradouro, Numero, Cidade, Area) VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$dt_nasc', '$logradouro', '$numero', '$cidade', '$area')";

if (mysqli_query($conexao, $sql)) {
    include("Dados_SalvosForms.php");
} else {
    echo 'Erro ao inserir dados: ' . mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);
?>
