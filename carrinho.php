<?php
include 'inc/header.inc.php';
?>

<div class="container-fluid py-5" style="background-color: #121212; color: #ffffff; min-height: 80vh;">
    <div class="container py-3">
        <h2 class="mb-4 fw-bold text-warning">
            🛒 Meu Carrinho - The Copão
        </h2>

        <div class="row g-4">
            <!-- Lista de Produtos (Coluna Esquerda) -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 rounded-3 p-3" style="background-color: #1a1a1a; color: #ffffff; border: 1px solid #ffcc00 !important;">
                    <div class="table-responsive">
                        <table class="table align-middle table-dark table-borderless mb-0">
                            <thead>
                                <tr class="text-warning border-bottom fs-7 text-uppercase">
                                    <th scope="col" style="min-width: 250px;">Produto</th>
                                    <th scope="col" class="text-center" style="width: 120px;">Qtd</th>
                                    <th scope="col" class="text-end" style="width: 120px;">Preço</th>
                                    <th scope="col" class="text-end" style="width: 50px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Item 1 -->
                                <tr class="border-bottom border-secondary">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/copao-whisky.png" class="img-fluid rounded me-3" alt="Copão de Whisky 700ml" style="width: 60px; height: 60px; object-fit: cover; background: #000;">
                                            <div>
                                                <h6 class="mb-0 fw-bold text-white">Copão Whisky + Energético</h6>
                                                <small class="text-muted">700ml // Gelo de Sabor</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm border border-secondary rounded">
                                            <button class="btn btn-link text-warning text-decoration-none px-2" type="button">-</button>
                                            <input type="text" class="form-control text-center border-0 bg-transparent text-white px-0" value="2" readonly>
                                            <button class="btn btn-link text-warning text-decoration-none px-2" type="button">+</button>
                                        </div>
                                    </td>
                                    <td class="text-end fw-bold text-warning">R$ 20,00</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-danger border-0">❌</button>
                                    </td>
                                </tr>

                                <!-- Item 2 -->
                                <tr class="border-bottom border-secondary">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/copao-gin.png" class="img-fluid rounded me-3" alt="Copão Gin Tropical 700ml" style="width: 60px; height: 60px; object-fit: cover; background: #000;">
                                            <div>
                                                <h6 class="mb-0 fw-bold text-white">Copão Gin Tropical</h6>
                                                <small class="text-muted">700ml // Frutas Secas</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm border border-secondary rounded">
                                            <button class="btn btn-link text-warning text-decoration-none px-2" type="button">-</button>
                                            <input type="text" class="form-control text-center border-0 bg-transparent text-white px-0" value="1" readonly>
                                            <button class="btn btn-link text-warning text-decoration-none px-2" type="button">+</button>
                                        </div>
                                    </td>
                                    <td class="text-end fw-bold text-warning">R$ 18,00</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-danger border-0">❌</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Ações do fundo da tabela -->
                    <div class="d-flex justify-content-between align-items-center mt-3 pt-2">
                        <a href="index.php" class="btn btn-link text-warning text-decoration-none p-0 fw-bold">
                            ← Continuar Comprando
                        </a>
                        <button class="btn btn-outline-secondary btn-sm rounded-pill text-white">Limpar Carrinho</button>
                    </div>
                </div>
            </div>

            <!-- Resumo do Pedido (Coluna Direita) -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 rounded-3 p-4 mb-3" style="background-color: #1a1a1a; color: #ffffff; border: 1px solid #ffcc00 !important;">
                    <h5 class="mb-4 fw-bold text-warning">Resumo da Compra</h5>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal (3 itens)</span>
                        <span class="fw-semibold">R$ 58,00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Taxa de Entrega</span>
                        <span class="text-success fw-semibold">A calcular (Whats)</span>
                    </div>

                    <hr class="my-3 border-secondary">

                    <!-- Cupom de Desconto -->
                    <div class="mb-4">
                        <label class="form-label small text-muted text-uppercase fw-bold">Cupom de Desconto</label>
                        <div class="input-group">
                            <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="Ex: COPÃO10">
                            <button class="btn btn-warning fw-bold" type="button">Aplicar</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-5 fw-bold">Total estimado:</span>
                        <span class="fs-4 fw-bold text-warning">R$ 58,00</span>
                    </div>

                    <a href="https://wa.me/5542998178060?text=Olá!%20Gostaria%20de%20finalizar%20meu%20pedido%20do%20site!" target="_blank" class="text-decoration-none">
                        <button class="btn btn-success w-100 py-2.5 fw-bold rounded-pill shadow-sm mb-2">
                            Finalizar pelo WhatsApp 📲
                        </button>
                    </a>
                </div>

                <!-- Aviso de Segurança/Entrega -->
                <div class="card border-0 p-3 shadow-sm rounded-3" style="background-color: #1a1a1a; border: 1px solid #333 !important;">
                    <div class="d-flex align-items-center text-muted">
                        <span class="fs-4 me-3">🛡️</span>
                        <p class="mb-0 small text-white-50">Entrega rápida e segura. Aceitamos Pix, Cartões de Crédito/Débito e Dinheiro na entrega.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'inc/footer.inc.php';
?>