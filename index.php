<?php include 'inc/header.inc.php'; ?>

<div class="site-container">

    <!-- COLUNA ESQUERDA (SIDEBAR DE NAVEGAÇÃO E OFERTAS) -->
    <div class="coluna-esquerda">

        <div class="menu-lateral">

            <section class="busca">
                <h3>Buscar Bebida</h3>
                <form class="form-busca">
                    <input type="search" name="busca" placeholder="Qual a boa de hoje?">
                    <button type="submit">Buscar</button>
                </form>
            </section>

            <section class="menu-departamentos" style="margin-top: 20px;">
                <h3>Departamentos</h3>
                <div class="sub-menu-lateral">Passe o mouse para ver</div>

                <ul class="lista-categorias">

                    <li class="dropdown-cat">
                        <a href="#">Copões Exclusivos (700ml)</a>
                        <ul class="sub-itens">
                            <li>Copão de Whisky + Energético</li>
                            <li>Copão de Gin + Tônica</li>
                            <li>Copão de Vodka + Energético</li>
                            <li>Copão de Licor de Menta</li>
                            <li>Copão de Cachaça de Sabor</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Cervejas & Chopes</a>
                        <ul class="sub-itens">
                            <li>Cervejas em Lata</li>
                            <li>Long Neck</li>
                            <li>Garrafas 600ml / Litrão</li>
                            <li>Grools & Chope Pet</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Destilados & Garrafas</a>
                        <ul class="sub-itens">
                            <li>Whiskys Premium</li>
                            <li>Vodkas Importadas & Nacionais</li>
                            <li>Gins Especiais</li>
                            <li>Cachaças & Rum</li>
                            <li>Licores & Tequila</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Vinhos & Espumantes</a>
                        <ul class="sub-itens">
                            <li>Vinhos Tintos & Brancos</li>
                            <li>Vinhos Suaves</li>
                            <li>Espumantes & Moscatel</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Combos para Resenha</a>
                        <ul class="sub-itens">
                            <li>Combo Vodka + 4 Energéticos</li>
                            <li>Combo Whisky + 4 Energéticos</li>
                            <li>Combo Gin + Tônica + Gelo de Sabor</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Sem Álcool & Misturas</a>
                        <ul class="sub-itens">
                            <li>Energéticos 2L e Lata</li>
                            <li>Refrigerantes (Lata/2L)</li>
                            <li>Sucos & Água Mineral</li>
                            <li>Tônicas & Isotônicos</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Conveniência & Gelo</a>
                        <ul class="sub-itens">
                            <li>Saco de Gelo (5kg / 10kg)</li>
                            <li>Gelo de Sabor (Coco, Melancia)</li>
                            <li>Saco de Carvão</li>
                            <li>Cigarros & Essências</li>
                        </ul>
                    </li>

                    <li class="dropdown-cat">
                        <a href="#">Tabacaria & Narguilé</a>
                        <ul class="sub-itens">
                            <li>Essências Variadas</li>
                            <li>Carvão de Coco</li>
                            <li>Papel Alumínio & Acessórios</li>
                        </ul>
                    </li>

                </ul>
            </section>

        </div>

        <!-- CARD HOJE NA DISTRIBUIDORA -->
        <div class="card-hoje">
            <h3>Destaque do Dia</h3>
            <div class="slideshow-hoje">
                <div class="slide-hoje" style="display: block;">
                    <img src="img/copao-destaque.png" alt="Copão 700ml em Promoção">
                </div>
            </div>
        </div>

        <!-- CARD WHATSAPP DELIVERY -->
        <div class="card-whatsapp">
            <h3>Peça pelo WhatsApp</h3>
            <p>Entrega rápida de copões e bebidas geladas direto na sua casa!</p>
            <a href="https://wa.me/5542998178060" target="_blank">Chamar no WhatsApp</a>
            <p class="texto-qrcode">Ou aponte a câmera</p>
            <img class="qrcode-whatsapp" src="img/qrcode-whatsapp.png" alt="QR Code WhatsApp">
        </div>

    </div>

    <!-- CONTEÚDO PRINCIPAL (BANNERS E VITRINE DE BEBIDAS) -->
    <div class="conteudo-principal">

        <!-- SLIDESHOW PRINCIPAL -->
        <div class="banner-box">
            <div class="slideshow">
                <div class="slide fade" style="display: block;">
                    <img src="img/baner1.png" style="width: 100%" alt="Banner The Copão 700ml">
                </div>
                <div class="slide fade">
                    <img src="img/baner2.png" style="width: 100%" alt="Promoção de Combos">
                </div>
                <div class="slide fade">
                    <img src="img/baner3.png" style="width: 100%" alt="Entrega Rápida de Bebidas">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <div style="text-align: center;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <!-- VITRINE DE PRODUTOS -->
        <div class="secao-cardapio">
            <h2>Copões & Destaques da Distribuidora</h2>
            <div class="sub-texto">
                As bebidas mais geladas da cidade com os melhores preços!
            </div>

            <div class="promocoes">

                <div class="card-produto">
                    <img src="img/copao-whisky.png" alt="Copão de Whisky">
                    <h3>Copão Whisky + Energético 700ml</h3>
                    <p class="preco">R$ 20,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/copao-gin.png" alt="Copão de Gin">
                    <h3>Copão Gin Tropical 700ml</h3>
                    <p class="preco">R$ 18,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/copao-vodka.png" alt="Copão de Vodka">
                    <h3>Copão Vodka + Energético 700ml</h3>
                    <p class="preco">R$ 15,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/combo-vodka.png" alt="Combo Vodka">
                    <h3>Combo Vodka Smirnoff + 4 Red Bull</h3>
                    <p class="preco">R$ 89,90</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/combo-whisky.png" alt="Combo Whisky">
                    <h3>Combo Whisky Red Label + 4 Red Bull</h3>
                    <p class="preco">R$ 129,90</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/cerveja-lata.png" alt="Cerveja Amstel">
                    <h3>Fardo Cerveja Amstel 350ml (12 un)</h3>
                    <p class="preco">R$ 42,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/heineken.png" alt="Heineken Long Neck">
                    <h3>Heineken Long Neck 330ml</h3>
                    <p class="preco">R$ 8,50</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/energetico-2l.png" alt="Energético 2L">
                    <h3>Energético Monster / Baly 2L</h3>
                    <p class="preco">R$ 14,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/gelo-sabor.png" alt="Gelo de Sabor">
                    <h3>Gelo de Sabor Coco/Melancia</h3>
                    <p class="preco">R$ 4,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/saco-gelo.png" alt="Saco de Gelo">
                    <h3>Saco de Gelo Filtrado 5kg</h3>
                    <p class="preco">R$ 12,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/carvao.png" alt="Saco de Carvão">
                    <h3>Saco de Carvão Vegetal 3kg</h3>
                    <p class="preco">R$ 15,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/vinho.png" alt="Vinho Tinto">
                    <h3>Vinho Tinto Suave 750ml</h3>
                    <p class="preco">R$ 25,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/gin-garrafa.png" alt="Gin Tanqueray">
                    <h3>Gin Tanqueray Garrafa 750ml</h3>
                    <p class="preco">R$ 110,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/tequila.png" alt="Tequila Jose Cuervo">
                    <h3>Tequila Gold 750ml</h3>
                    <p class="preco">R$ 98,00</p>
                    <button>Comprar</button>
                </div>

                <div class="card-produto">
                    <img src="img/essencia.png" alt="Essência Narguilé">
                    <h3>Essência Zomo / Ziggy</h3>
                    <p class="preco">R$ 12,00</p>
                    <button>Comprar</button>
                </div>

            </div>
        </div>

    </div>

</div>

<?php include 'inc/footer.inc.php'; ?>