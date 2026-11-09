<?php include 'inc/header.inc.php'; ?>

    <!-- Seção Hero com Banner Passando Fotos -->
    <section class="hero-slider">
    <!-- Imagens que vão rodar (substitua pelos caminhos das suas fotos) -->
        <div class="hero-slide-bg ativa" style="background-image: url('img/img1.png');"></div>
        <div class="hero-slide-bg" style="background-image: url('img/fotos3.png');"></div>
        <div class="hero-slide-bg" style="background-image: url('img/combojack.png');"></div>

    <!-- Conteúdo do Texto -->
        <div class="hero-conteudo">
            <h1 style="color: #fff; font-size: 28px; margin-bottom: 10px;">O Oficial do Rolê Chegou! 🍻</h1>
            <p style="color: var(--texto-secundario); font-size: 15px; margin-bottom: 20px;">
            Os melhores copões de 700ml, destilados e combos com entrega rápida para salvar sua noite.
            </p>
            <a href="#cardapio" class="btn-principal" style="display: inline-block; background: var(--roxo-neon); color: #fff; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: bold;">
            Garantir Meu Copão
            </a>
        </div>
    </section>

<!-- Script para trocar as fotos automaticamente a cada 4 segundos -->
    <script>
    let slideAtual = 0;
    const slides = document.querySelectorAll('.hero-slide-bg');

    function proximoSlide() {
        slides[slideAtual].classList.remove('ativa');
        slideAtual = (slideAtual + 1) % slides.length;
        slides[slideAtual].classList.add('ativa');
    }

// Troca de imagem a cada 2000 milissegundos (4 segundos)
setInterval(proximoSlide, 2000);
</script>

    <!-- LAYOUT EM DUAS COLUNAS: MENU LATERAL + VITRINE -->
    <div class="layout-principal" id="vitrine">
        
        <!-- COLUNA ESQUERDA: MENU LATERAL -->
        <aside class="sidebar-menu">
            <h3>Categorias</h3>
            
            <div class="sidebar-dropdown">
                <button class="sidebar-dropbtn">Copões (700ml) ▼</button>
                <div class="sidebar-content">
                    <a href="copoes.php?tipo=gin">Copão de Gin + Tônica</a>
                    <a href="copoes.php?tipo=whisky">Copão de Whisky + Energético</a>
                    <a href="copoes.php?tipo=vodka">Copão de Vodka + Energético</a>
                </div>
            </div>

            <div class="sidebar-dropdown">
                <button class="sidebar-dropbtn">Cervejas & Chopes ▼</button>
                <div class="sidebar-content">
                    <a href="cervejas.php?tipo=latao">Pack Cerveja Latão</a>
                    <a href="cervejas.php?tipo=chope">Chope Barril</a>
                </div>
            </div>

            <div class="sidebar-dropdown">
                <button class="sidebar-dropbtn">Destilados ▼</button>
                <div class="sidebar-content">
                    <a href="destilados.php?tipo=whisky">Whiskys</a>
                    <a href="destilados.php?tipo=vodka">Vodkas</a>
                    <a href="destilados.php?tipo=gin">Gins</a>
                </div>
            </div>

            <div class="sidebar-dropdown">
                <button class="sidebar-dropbtn">Combos para Resenha ▼</button>
                <div class="sidebar-content">
                    <a href="combos.php?tipo=resenha">Combo Resenha</a>
                    <a href="combos.php?tipo=ballantines">Combo Ballantine's</a>
                </div>
            </div>

            <div class="sidebar-dropdown">
                <button class="sidebar-dropbtn">Conveniência & Gelo ▼</button>
                <div class="sidebar-content">
                    <a href="gelo.php?tipo=filtrado">Saco de Gelo Filtrado (1kg)</a>
                    <a href="gelo.php?tipo=energetico">Energéticos</a>
                </div>
            </div>
        </aside>

        <!-- COLUNA DIREITA: VITRINE DE PRODUTOS -->
        <main class="conteudo-vitrine">
            <h2 class="titulo-secao">Mais Pedidos para o Rolê</h2>
            
            <div class="grid-produtos-novo">
                <!-- Produto 1 -->
                <div class="card-produto">
                    <div class="card-img-container">
                        <img src="img/copaogin.png" alt="Copão de Gin" class="produto-img">
                    </div>
                    <h3>Copão de Gin + Tônica & Frutas</h3>
                    <div class="preco">R$ 25,90</div>
                    <div class="quantidade-container">
                        <div class="seletor-qtd">
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, -1)">-</button>
                            <input type="text" value="1" class="input-qtd" readonly>
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, 1)">+</button>
                        </div>
                        <button class="btn-comprar">Adicionar</button>
                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="card-produto">
                    <div class="card-img-container">
                        <img src="img/jack.png" alt="Copão de Whisky" class="produto-img">
                    </div>
                    <h3>Copão de Whisky + Energético</h3>
                    <div class="preco">R$ 28,50</div>
                    <div class="quantidade-container">
                        <div class="seletor-qtd">
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, -1)">-</button>
                            <input type="text" value="1" class="input-qtd" readonly>
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, 1)">+</button>
                        </div>
                        <button class="btn-comprar">Adicionar</button>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="card-produto">
                    <div class="card-img-container">
                        <img src="img/gelo.png" alt="Gelo de Frutas" class="produto-img">
                    </div>
                    <h3>Saco de Gelo Filtrado (1kg)</h3>
                    <div class="preco">R$ 12,00</div>
                    <div class="quantidade-container">
                        <div class="seletor-qtd">
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, -1)">-</button>
                            <input type="text" value="1" class="input-qtd" readonly>
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, 1)">+</button>
                        </div>
                        <button class="btn-comprar">Adicionar</button>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="card-produto">
                    <div class="card-img-container">
                        <img src="img/combojack.png" alt="Combo 1" class="produto-img">
                    </div>
                    <h3>Combo Resenha (Whisky + 4 Energéticos)</h3>
                    <div class="preco">R$ 89,90</div>
                    <div class="quantidade-container">
                        <div class="seletor-qtd">
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, -1)">-</button>
                            <input type="text" value="1" class="input-qtd" readonly>
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, 1)">+</button>
                        </div>
                        <button class="btn-comprar">Adicionar</button>
                    </div>
                </div>

                <!-- Produto 5 -->
                <div class="card-produto">
                    <div class="card-img-container">
                        <img src="img/ballantines.png" alt="Combo 2" class="produto-img">
                    </div>
                    <h3>Combo Ballantine's</h3>
                    <div class="preco">R$ 75,00</div>
                    <div class="quantidade-container">
                        <div class="seletor-qtd">
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, -1)">-</button>
                            <input type="text" value="1" class="input-qtd" readonly>
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, 1)">+</button>
                        </div>
                        <button class="btn-comprar">Adicionar</button>
                    </div>
                </div>

                <!-- Produto 6 -->
                <div class="card-produto">
                    <div class="card-img-container">
                        <img src="img/cerveja.png" alt="Combo 3" class="produto-img">
                    </div>
                    <h3>Pack Cerveja Latão (8 unidades)</h3>
                    <div class="preco">R$ 45,00</div>
                    <div class="quantidade-container">
                        <div class="seletor-qtd">
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, -1)">-</button>
                            <input type="text" value="1" class="input-qtd" readonly>
                            <button type="button" class="btn-qtd" onclick="alterarQtd(this, 1)">+</button>
                        </div>
                        <button class="btn-comprar">Adicionar</button>
                    </div>
                </div>

            </div>
        </main>

    </div>

<?php include 'inc/footer.inc.php'; ?>
