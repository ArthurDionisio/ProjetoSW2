<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado com Sucesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="bg-success text-white p-3 text-center">
        <h1>Produto Cadastrado com Sucesso!</h1>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?php
                $servidor = "localhost";
                $bancodados = "projetosw";
                $usuario = "root";
                $senha = "";

                try {
                    // Conectar ao banco de dados
                    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
                    $conexao = new PDO($datasource, $usuario, $senha);
                    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Verificar se os dados do produto foram passados via POST
                    if (isset($_POST['descricao']) && isset($_POST['preco']) && isset($_POST['categoria']) && isset($_POST['fornecedor'])) {
                        $descricao = $_POST['descricao'];
                        $preco = $_POST['preco'];
                        $categoria = $_POST['categoria'];
                        $fornecedor = $_POST['fornecedor'];

                        // Inserir os dados do novo produto no banco de dados
                        $stmt = $conexao->prepare("INSERT INTO produtos (descricao, preco, categoria, fornecedor) VALUES (?, ?, ?, ?)");
                        $stmt->execute([$descricao, $preco, $categoria, $fornecedor]);

                        // Obter o ID do último produto inserido
                        $id_produto_inserido = $conexao->lastInsertId();

                        // Buscar os dados do produto inserido para exibição
                        $stmt_select = $conexao->prepare("SELECT * FROM produtos WHERE id = ?");
                        $stmt_select->execute([$id_produto_inserido]);

                        if ($stmt_select->rowCount() > 0) {
                            $produto = $stmt_select->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="alert alert-success">
                                <h4 class="alert-heading">Detalhes do Produto Cadastrado</h4>
                                <ul>
                                <li><strong>Nome:</strong> <?php echo htmlspecialchars($produto['Nome']); ?></li>
                                    <li><strong>Descrição:</strong> <?php echo htmlspecialchars($produto['descricao']); ?></li>
                                    <li><strong>Preço:</strong> R$ <?php echo htmlspecialchars($produto['preco']); ?></li>
                                    <li><strong>Categoria:</strong> <?php echo htmlspecialchars($produto['categoria']); ?></li>
                                    <li><strong>Fornecedor:</strong> <?php echo htmlspecialchars($produto['fornecedor']); ?></li>
                                </ul>
                            </div>
                            <?php
                        } else {
                            echo "<p class='text-danger'>Erro ao buscar detalhes do produto cadastrado.</p>";
                        }

                    } else {
                        echo "<p class='text-warning'>.</p>";
                    }

                } catch (PDOException $e) {
                    echo "Erro na conexão ou ao cadastrar o produto: " . $e->getMessage();
                }
                ?>

                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-success">Voltar à Página Inicial</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>