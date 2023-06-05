<?php
// Iniciar a sessão
session_start();

require_once 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores do formulário
    $nomePet = $_POST['nome_pet'];
    $fotoPet = $_POST['foto_pet'];
    $idadePet = $_POST['idade_pet'];
    $pesoPet = $_POST['peso_pet'];

    // Prepara a query SQL para inserção dos dados na tabela FormularioParte1
    $sql = "INSERT INTO FormularioParte1 (nome_pet, foto_pet, idade, peso) VALUES (?, ?, ?, ?)";

    // Prepara a declaração SQL
    $stmt = mysqli_prepare($conn, $sql);

    // Verifica se a declaração SQL foi preparada corretamente
    if ($stmt) {
        // Associa os valores aos parâmetros da declaração SQL
        mysqli_stmt_bind_param($stmt, 'ssii', $nomePet, $fotoPet, $idadePet, $pesoPet);

        // Executa a declaração SQL
        mysqli_stmt_execute($stmt);

    // Obtenha o ID gerado pelo formulário 1
    $id_pai = mysqli_insert_id($conn);

    // Armazene o ID na sessão
    $_SESSION['id_pai'] = $id_pai;

   // Verifica se a inserção foi bem-sucedida
if (mysqli_stmt_affected_rows($stmt) > 0) {
    // Fecha a declaração SQL
    mysqli_stmt_close($stmt);

    // Cadastro realizado com sucesso
    echo '<script>alert("Formulário parte 1 cadastrado com sucesso!");';
    echo 'window.location.href = "../assets/imput_de_dados2.php";</script>';
} else {
    // Fecha a declaração SQL
    mysqli_stmt_close($stmt);

    // Falha no cadastro
    echo '<script>alert("Falha ao cadastrar o formulário parte 1.");';
    echo 'window.location.href = "../assets/imput_de_dados.php";</script>';
}
// Fecha a declaração SQL
        mysqli_stmt_close($stmt);
    } else {
        echo "Erro na preparação da declaração SQL: " . mysqli_error($conn);
    }
    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
}
?>