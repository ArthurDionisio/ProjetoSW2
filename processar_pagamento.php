<?php
// Verificar se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST['nome'];
    $numero_cartao = $_POST['numero_cartao'];
    $validade = $_POST['validade'];
    $cvv = $_POST['cvv'];

    // Aqui você faria a integração com a API de pagamento para processar o pagamento
    // Como exemplo, vamos apenas verificar se os campos não estão vazios

    if (empty($nome) || empty($numero_cartao) || empty($validade) || empty($cvv)) {
        echo "Todos os campos são obrigatórios!";
    } else {
        // Simular sucesso no pagamento
        echo "<h3>Pagamento realizado com sucesso!</h3>";
        echo "<p>Nome do Titular: " . htmlspecialchars($nome) . "</p>";
        echo "<p>Número do Cartão: " . htmlspecialchars($numero_cartao) . "</p>";
        echo "<p>Validade: " . htmlspecialchars($validade) . "</p>";
        echo "<p>Código de Segurança (CVV): " . htmlspecialchars($cvv) . "</p>";
        // Aqui você também pode redirecionar para uma página de confirmação de pagamento
    }
} else {
    // Caso o método de envio não seja POST
    echo "Erro ao processar o pagamento. Tente novamente.";
}
?>
