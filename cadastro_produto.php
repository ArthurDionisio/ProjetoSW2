<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="bg-warning text-white p-3 text-center">
        <h1>Cadastro de Produto</h1>   
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3 border border-primary">

                <h3 class="text-center p-3">Preencha os dados abaixo</h3>

                <form action="processa_produto.php" method="POST">
                    <p>
                        Descrição <br>
                        <input type="text" name="descricao" class="form-control" required>
                    </p>

                    <p>
                        Preço da Venda <br>
                        <input type="text" name="preco" class="form-control" required>
                    </p>

                    <p>
                        Categoria <br>
                        <input type="text" name="categoria" class="form-control" required>
                    </p>

                    <p>
                        Nome do Fornecedor <br>
                        <input type="text" name="fornecedor" class="form-control" required>
                    </p>

                    <p>
                        <input type="submit" value="Cadastrar Produto" class="btn btn-primary">
                        <input type="reset" value="Limpar Texto" class="btn btn-success">
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
