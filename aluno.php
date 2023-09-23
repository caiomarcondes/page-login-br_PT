<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "aluno";

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Dados a serem inseridos
$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$data_admissao = $_POST['data_admissao'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$contato_emer_nome = $_POST['contato_emer_nome'];
$contato_emer_fone = $_POST['contato_emer_fone'];

// Comando SQL para inserir os dados na tabela funcionarios
$sql = "INSERT INTO funcionarios (nome, funcao, data_admissao, endereco, numero, complemento, cidade, estado, cep, telefone, celular, cpf, email, data_nascimento, contato_emer_nome, contato_emer_fone) VALUES ('$nome', '$funcao', '$data_admissao', '$endereco', '$numero', '$complemento', '$cidade', '$estado', '$cep', '$telefone', '$celular', '$cpf', '$email', '$data_nascimento', '$contato_emer_nome', '$contato_emer_fone')";

// Executa o comando SQL
if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso.";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>