<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento Concluído</title>

    <!-- Incluindo Bootstrap para estilizar a página -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Estilo adicional para tornar a página mais bonita -->
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .alert-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }
        .header {
            background-color: #28a745;
            color: white;
            padding: 30px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <div class="header text-center">
        <h1>Pagamento Realizado com Sucesso!</h1>
        <p class="lead">Obrigado por concluir o pagamento. Aqui estão os detalhes do seu pagamento.</p>
    </div>

    <!-- Corpo -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php
                // Conexão com o banco de dados
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

                    // Buscar o ID do pagamento da URL
                    if (isset($_GET['id_pagamento'])) {
                        $id_pagamento = $_GET['id_pagamento'];

                        // Buscar dados do pagamento no banco de dados
                        $stmt = $conexao->prepare("SELECT * FROM pagamentos WHERE id = ?");
                        $stmt->execute([$id_pagamento]);

                        // Verificar se o pagamento foi encontrado
                        if ($stmt->rowCount() > 0) {
                            $pagamento = $stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="alert alert-success mt-4" role="alert">
                                <h4 class="alert-heading">Detalhes do Pagamento</h4>
                                <ul>
                                    <li><strong>Nome do Titular:</strong> <?php echo htmlspecialchars($pagamento['nome']); ?></li>
                                    <li><strong>Número do Cartão:</strong> <?php echo htmlspecialchars($pagamento['numero_cartao']); ?></li>
                                    <li><strong>Validade:</strong> <?php echo htmlspecialchars($pagamento['validade']); ?></li>
                                    <li><strong>Código de Segurança (CVV):</strong> <?php echo htmlspecialchars($pagamento['cvv']); ?></li>
                                </ul>
                            </div>
                            <?php
                        } else {
                            echo "<p class='text-danger'>Pagamento não encontrado.</p>";
                        }
                    } else {
                        echo "<p class='text-danger'>ID do pagamento não fornecido.</p>";
                    }

                } catch (PDOException $e) {
                    // Caso ocorra algum erro na conexão
                    echo "Erro na conexão: " . $e->getMessage();
                }
                ?>

                <!-- Botão para voltar -->
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-success">Voltar à Página Inicial</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
