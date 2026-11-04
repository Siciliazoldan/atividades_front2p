<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Copão - Distribuidora de Bebidas</title>

    <!-- Bootstrap CSS (Padrão W3Schools / Aulas) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Nosso estilo personalizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Ícone da aba do navegador -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body class="bg-light">

<header class="bg-dark text-white shadow-sm sticky-top">
    <div class="container d-flex justify-content-between align-items-center py-3">
        
        <!-- Logo do E-commerce -->
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="The Copão" style="height: 50px;" class="img-fluid">
            </a>
        </div>

        <!-- Menu de Navegação -->
        <nav class="nav d-none d-md-flex gap-3 align-items-center">
            <a href="index.php" class="text-white text-decoration-none fw-semibold">Início</a>
            <a href="#produtos" class="text-white text-decoration-none fw-semibold">Cardápio & Copões</a>
            <a href="#destaques" class="text-white text-decoration-none fw-semibold">Bebidas</a>
            <a href="#contato" class="text-white text-decoration-none fw-semibold">Contato</a>
        </nav>

        <!-- Ações do Header (Carrinho) -->
        <div class="acoes-header d-flex align-items-center">
            <div class="carrinho position-relative">
                <a href="carrinho.php" class="btn btn-outline-warning position-relative d-flex align-items-center gap-2">
                    🛒 Carrinho
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                    </span>
                </a>
            </div>
        </div>

    </div>
</header>