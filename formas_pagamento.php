<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de Pagamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="bg-primary text-white p-3 text-center">
        <h1>Forma de Pagamento</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3 border border-primary">
                <h3 class="text-center p-3">Preencha os dados abaixo para concluir o pagamento</h3>

                <form action="processar_pagamento.php" method="POST">
                    <p>
                        Digite o nome do titular do cartão<br>
                        <input type="text" name="nome" class="form-control" required>
                    </p>

                    <p>
                        Digite o número do cartão de crédito<br>
                        <input type="text" name="numero_cartao" class="form-control" required>
                    </p>

                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                Data de validade (MM/AA)<br>
                                <input type="text" name="validade" class="form-control" required>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                Código de segurança (CVV)<br>
                                <input type="text" name="cvv" class="form-control" required>
                            </p>
                        </div>
                    </div>

                    <p class="text-center">
                        <input type="submit" value="Concluir Pagamento" class="btn btn-success">
                        <input type="reset" value="Limpar" class="btn btn-danger">
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
