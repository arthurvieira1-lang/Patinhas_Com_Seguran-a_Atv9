<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUmigos - Painel</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 
    <header class="topbar">
        <h1>🐾 AUmigos</h1>
        <span>Sistema de Cadastro de Clientes e Animais</span>
    </header>
 
    <main>
        <section class="welcome">
            <h2>Bem-vindo(a)!</h2>
            <p>Gerencie por aqui os clientes da pet shop e os animais sob os cuidados de cada um.</p>
        </section>
 
        <?php if ($dbError): ?>
            <div class="error-box"><?= htmlspecialchars($dbError) ?></div>
        <?php endif; ?>
 
        <section class="cards">
            <div class="card">
                <div class="number"><?= $totalClientes ?></div>
                <div class="label">Clientes cadastrados</div>
            </div>
            <div class="card">
                <div class="number"><?= $totalAnimais ?></div>
                <div class="label">Animais cadastrados</div>
            </div>
        </section>
 
        <section class="menu">
            <a href="cliente/listar.php">
                <div class="titulo"> Clientes</div>
                <div class="desc">Cadastrar, listar, editar e excluir clientes.</div>
            </a>
            <a href="animal/listar.php">
                <div class="titulo"> Animais</div>
                <div class="desc">Cadastrar, listar, editar e excluir animais, vinculando cada um ao seu responsável.</div>
            </a>
        </section>
    </main>
 
    <footer>
        AUmigos &copy; <?= date('Y') ?> — Sistema desenvolvido em PHP + MySQL
    </footer>
 
</body>
</html>