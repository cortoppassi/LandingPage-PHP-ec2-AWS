<?php 
    $servidor = "localhost";
    $usuario = "john";
    $senha = "12345";
    $dbname = "data" ;

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
   if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Criação da tabela 'usuarios' se não existir
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    msgUsuario TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'usuarios' criada com sucesso ou já existente.";
} else {
    echo "Erro ao criar a tabela 'usuarios': " . $conn->error;
}
?>
<!-- PDO -->
