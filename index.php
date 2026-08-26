<?php

session_start();


$erro = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    
    if ($usuario === "admin" && $senha === "123") {
        $_SESSION['logado'] = true;
        
        header("Location: painel.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUmigos - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">
       
        <div class="logo">
            <h1>AUmigos</h1>
            <p>Sistema de Gestão</p>
        </div>

        
        <?php if (!empty($erro)): ?>
            <div class="erro-mensagem">
                <?= $erro ?>
            </div>
        <?php endif; ?>

        
        <form action="index.php" method="POST">
            <div class="input-group">
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
            </div>

            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>

            <button type="submit" class="btn-enviar">Entrar</button>
        </form>
    </div>

</body>
</html>