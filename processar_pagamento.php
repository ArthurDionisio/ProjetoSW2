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
    
    echo "Pagamento Efetuado com Sucesso !";
} catch (PDOException $e) {
    // Caso ocorra algum erro na conexão
    echo "Conexão falhou: " . $e->getMessage();
}
?>
