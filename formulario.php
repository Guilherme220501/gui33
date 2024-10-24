<?php
include 'config.php'; // Inclui o arquivo de configuração

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['Nome'];
    $idade = $_POST['IDADE'];
    $cpf = $_POST['CPF'];
    $rg = $_POST['RG'];
    $email = $_POST['Email'];
    $telefone = $_POST['Telefone'];
    $endereco = $_POST['Endereço'];
    $certidao_nascimento = $_POST['Certidão de Nascimento'];
    $data = $_POST['Data'];
    $cnh = $_POST['CNH'];
    $cor = $_POST['Sua cor'];
    $nivel = $_POST['Seu nível'];
    $data_hora = $_POST['Data e hora'];
    $estado_civil = isset($_POST['cívil']) ? implode(", ", $_POST['cívil']) : '';
    $experiencia = isset($_POST['experiência']) ? $_POST['experiência'] : '';
    $conhecimento = isset($_POST['conhecimento']) ? implode(", ", $_POST['conhecimento?']) : '';
    $signo = $_POST['Signo?'];

    // Prepara e executa a consulta
    $sql = "INSERT INTO formulario (nome, idade, cpf, rg, email, telefone, endereco, certidao_nascimento, data, cnh, cor, nivel, data_hora, estado_civil, experiencia, conhecimento, signo) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissssissssssssss", $nome, $idade, $cpf, $rg, $email, $telefone, $endereco, $certidao_nascimento, $data, $cnh, $cor, $nivel, $data_hora, $estado_civil, $experiencia, $conhecimento, $signo);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Cadastro</title>
</head>
<body>
    <h1>Cadastro realizado!</h1>
    <a href="index.html">Retornar ao início</a>
</body>
</html>
