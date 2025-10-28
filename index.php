<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ordem de Serviço</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
  <a href="logout.php">Sair</a>

  <form action="/salvar_ordem" method="post">
    <!-- formulário da ordem de serviço aqui -->
  </form>

</body>
</html>