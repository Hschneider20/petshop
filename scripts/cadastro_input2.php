<?php
// Iniciar a sessão
session_start();
require_once 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

// Verificar se o ID pai está presente na sessão
if (!isset($_SESSION['id_pai'])) {
    // Redirecionar para o formulário 1 caso o ID pai não esteja presente
    header('Location:../assets/imput_de_dados.php');
    exit;
}

// Obter o ID pai da sessão
$id_pai = $_SESSION['id_pai'];

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores do formulário
    $temperaturaCorporal = $_POST['temperatura_corporal'];
    $batimentosCardiacos = $_POST['batimentos_cardiacos'];
    $nivelAtividade = $_POST['nivel_atividade'];
    $nivelHidratacao = $_POST['nivel_hidratacao'];
    $formulario_parte1_id = $id_pai;

    // Prepara a query SQL para inserção dos dados na tabela FormularioParte2
    $sql = "INSERT INTO FormularioParte2 (temperatura_corporal, batimentos_cardiacos, nivel_atividade, nivel_hidratacao, formulario_parte1_id) VALUES (?, ?, ?, ?, ?)";

    // Prepara a declaração SQL
    $stmt = mysqli_prepare($conn, $sql);

    // Verifica se a declaração SQL foi preparada corretamente
    if ($stmt) {
        // Associa os valores aos parâmetros da declaração SQL
        mysqli_stmt_bind_param($stmt, 'siss', $temperaturaCorporal, $batimentosCardiacos, $nivelAtividade, $nivelHidratacao, $formulario_parte1_id);

        // Executa a declaração SQL
        mysqli_stmt_execute($stmt);
        // Limpar a sessão para remover o ID pai
        unset($_SESSION['id_pai']);

        // Verifica se a inserção foi bem-sucedida
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Formulário parte 2 cadastrado com sucesso!";
        } else {
            echo "Falha ao cadastrar o formulário parte 2.";
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