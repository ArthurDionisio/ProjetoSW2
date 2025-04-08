<?php

$servidor = "localhost";      // Endereço do servidor MySQL
$bancodados = "projetosw";    // Nome do banco de dados
$usuario = "root";            // Nome de usuário do MySQL
$senha = "";                  // Senha do MySQL (em branco no caso padrão)

try {
    // Criação da conexão PDO com o banco de dados
    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
    $conexao = new PDO($datasource, $usuario, $senha);
    
    // Definir modo de erro para exceções
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se os dados foram enviados corretamente
    if (isset($_POST['nome'], $_POST['numero_cartao'], $_POST['validade'], $_POST['cvv'])) {
        // Dados do pagamento (obtidos via POST)
        $nome = $_POST['nome'];
        $numero_cartao = $_POST['numero_cartao'];
        $validade = $_POST['validade'];
        $cvv = $_POST['cvv'];

        // Inserir os dados no banco de dados
        $stmt = $conexao->prepare("INSERT INTO pagamentos (nome, numero_cartao, validade, cvv) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $numero_cartao, $validade, $cvv]);

        // Pega o ID do pagamento inserido
        $id_pagamento = $conexao->lastInsertId();

        // Redireciona para a página de sucesso com o ID do pagamento
        header("Location: sucesso.php?id_pagamento=" . urlencode($id_pagamento));
        exit;  // Para garantir que o script pare após o redirecionamento

    } else {
        // Se algum dos campos não for enviado
        echo "Por favor, preencha todos os campos do formulário.";
    }

} catch (PDOException $e) {
    // Caso ocorra algum erro na conexão
    echo "Conexão falhou: " . $e->getMessage();
}
?>
