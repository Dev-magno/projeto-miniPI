<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor do banco de dados
$username = "root";        // Nome de usuário para conexão com o banco de dados
$password = "123456";      // Senha para conexão com o banco de dados
$dbname = "categoria";     // Nome do banco de dados

// Criação da conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    // Se a conexão falhar, exibe uma mensagem de erro e encerra o script
    die("Connection failed: " . $conn->connect_error);
}

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a ação a ser realizada (insert, update, delete)
    $action = $_POST['action'];
    
    // Se a ação for 'insert', executa a inserção de uma nova categoria
    if ($action == 'insert') {
        $nome = $_POST['nome']; // Obtém o nome da nova categoria
        $sql = "INSERT INTO categorias VALUES ('$nome')"; // Comando SQL para inserir a categoria,
    } 
    // Se a ação for 'update', executa a atualização de uma categoria existente
    elseif ($action == 'update') {
        $id = $_POST['id'];     // Obtém o ID da categoria a ser atualizada
        $nome = $_POST['nome']; // Obtém o novo nome da categoria
        $sql = "UPDATE categorias SET nome='$nome' WHERE id=$id"; // Comando SQL para atualizar a categoria
    } 
    // Se a ação for 'delete', executa a exclusão de uma categoria
    elseif ($action == 'delete') {
        $id = $_POST['id'];     // Obtém o ID da categoria a ser deletada
        $sql = "DELETE FROM categorias WHERE id=$id"; // Comando SQL para deletar a categoria
    }

    // Executa a query SQL
    if ($conn->query($sql) === TRUE) {
        // Se a operação for bem-sucedida, exibe uma mensagem de sucesso
        echo "Operação realizada com sucesso!";
    } else {
        // Se ocorrer um erro, exibe a mensagem de erro
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} 
// Verifica se a requisição é do tipo GET (normalmente para exclusão)
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifica se a ação é 'delete' e se o ID está definido na URL
    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
        $id = $_GET['id']; // Obtém o ID da categoria a ser deletada
        $sql = "DELETE FROM categorias WHERE id=$id"; // Comando SQL para deletar a categoria

        // Executa a query SQL
        if ($conn->query($sql) === TRUE) {
            // Se a operação for bem-sucedida, exibe uma mensagem de sucesso
            echo "Categoria deletada com sucesso!";
        } else {
            // Se ocorrer um erro, exibe a mensagem de erro
            echo "Erro ao deletar categoria: " . $conn->error;
        }
    }
}

// Fecha a conexão com o banco de dados
$conn->close();

// Redireciona para a página principal (index.php) após a operação
header("Location: index.php"); 
exit; // Encerra o script para garantir que o redirecionamento aconteça
?>


