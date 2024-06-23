
<?php
$conn = mysqli_connect('localhost', 'root', '', 'bd_antigo');


if (isset($_POST['Login']) && isset($_POST['Senha'])) {
    $usuario = $_POST['Login']; 
    $senha = $_POST['Senha']; 

    // Consulta SQL para buscar usuários com base na palavra-chave
    $sql = "SELECT * FROM login WHERE Login = '$usuario' && Senha = '$senha' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    // Exibe os resultados
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            header("Location: Formulario.html");
            exit;
            }
    } else {
        echo "Nenhum resultado encontrado.";
    }
}

?>
