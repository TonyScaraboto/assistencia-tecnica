<?php
session_start();
session_unset(); // Remove todas as variáveis da sessão
session_destroy(); // Encerra a sessão

header("Location: login.html"); // Redireciona para a tela de login
exit();
?>