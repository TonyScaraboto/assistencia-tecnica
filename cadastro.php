<?php
include("conexao.php");

$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // mais seguro que md5

// Verifica se o e-mail já existe
$sql_verifica = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql_verifica);

if ($result->num_rows > 0) {
  echo "<script>alert('E-mail já cadastrado!'); window.location.href='cadastro.html';</script>";
} else {
  $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.html';</script>";
  } else {
    echo "Erro ao cadastrar: " . $conn->error;
  }
}
?>