<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOLDOCE</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <img src ="img/logo.png" alt="Meu Restaurante">
        </div>
        <button class="menu-toggle" aria-label="Abrir menu">&#9776;</button>
        <nav class="menu">
            <a href="#">Início</a>
            <a href="#">Cadastrar</a>
            <a href="#">Produtos</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
            <a href="#">Ajuda</a>
        </nav>
        <div class="carrinho">
            <div class="ajuste_icone_carrinho">
                <a href="#"><img src="img/carrinho.2.png" width="20%" heigth="5%" alt="carrinho de compras">
                <span class="valor_carrinho">730</span>
            </div>

        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('ativo');
        });
    </script>
