<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Copão Na Mão</title>
    <!-- Google Fonts: Sora -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS Principal -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- CABEÇALHO PRINCIPAL -->
    <header class="cabecalho-principal">
        <div class="logo-container">
            <a href="index.php">
                <img src="img/logo.png" alt="The Copão Na Mão" class="logo-img">
            </a>
        </div>

        <div class="busca-container">
            <form action="busca.php" method="GET">
                <input type="text" name="q" placeholder="Qual a boa de hoje? Ex: Copão de Gin">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <div class="acoes-topo">
            <a href="carrinho.php" class="btn-carrinho-topo">🛒 Carrinho (2)</a>
        </div>
    </header>
