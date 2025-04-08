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
        .footer {
            text-align: center;
            margin-top: 40px;
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
                <div class="alert alert-success mt-4" role="alert">
                    <h4 class="alert-heading">Detalhes do Pagamento</h4>
                    <ul>
                        <li><strong>Nome do Titular:</strong> <?php echo htmlspecialchars($_GET['nome']); ?></li>
                        <li><strong>Número do Cartão:</strong> <?php echo htmlspecialchars($_GET['numero_cartao']); ?></li>
                        <li><strong>Validade:</strong> <?php echo htmlspecialchars($_GET['validade']); ?></li>
                        <li><strong>Código de Segurança (CVV):</strong> <?php echo htmlspecialchars($_GET['cvv']); ?></li>
                    </ul>
                </div>

                <!-- Botão para voltar -->
                <div class="text-center">
                    <a href="index.php" class="btn btn-success">Voltar à Página Inicial</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="footer mt-5">
        <p>&copy; 2025 Sua Empresa. Todos os direitos reservados.</p>
    </div>

</body>
</html>
