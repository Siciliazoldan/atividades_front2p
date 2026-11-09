<?php include 'inc/header.inc.php'; ?>

<main class="container-carrinho" style="width: 90%; max-width: 900px; margin: 30px auto 60px auto;">
    <h2 style="color: #fff; margin-bottom: 25px; border-left: 4px solid var(--roxo-neon); padding-left: 12px; font-size: 22px;">
        Meu Carrinho – The Copão
    </h2>

    <!-- Topo do Carrinho -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <a href="index.php" style="color: var(--texto-secundario); text-decoration: none; font-size: 14px;">← Continuar Comprando</a>
        <button type="button" onclick="limparCarrinho()" style="background: transparent; color: #ef4444; border: 1px solid rgba(239, 68, 68, 0.4); padding: 5px 12px; border-radius: 6px; cursor: pointer; font-size: 12px;">Limpar Carrinho</button>
    </div>

    <!-- Lista de Itens -->
    <div id="listaCarrinho" style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px;">
        
        <!-- Item 1 -->
        <div class="item-carrinho" data-preco="20.00" style="background: var(--fundo-card, #18181b); border: 1px solid rgba(168, 85, 247, 0.2); border-radius: 12px; padding: 15px; display: flex; align-items: center; justify-content: space-between; gap: 15px;">
            <div style="display: flex; align-items: center; gap: 15px;">
                <img src="img/jack.png" alt="Copão Whisky" style="width: 65px; height: 65px; object-fit: cover; border-radius: 8px;">
                <div>
                    <h4 style="color: #fff; font-size: 15px; margin-bottom: 4px;">Copão Whisky + Energético</h4>
                    <p style="color: var(--texto-secundario); font-size: 12px;">700ml // Gelo de Sabor</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px;">
                <!-- Quantidade -->
                <div style="display: flex; align-items: center; gap: 5px;">
                    <button type="button" onclick="alterarQtd(this, -1)" style="background: #202025; color: #fff; border: 1px solid rgba(168, 85, 247, 0.4); width: 28px; height: 28px; border-radius: 6px; cursor: pointer;">-</button>
                    <input type="text" value="2" class="input-qtd" readonly style="width: 35px; text-align: center; background: #121214; border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 6px; padding: 4px;">
                    <button type="button" onclick="alterarQtd(this, 1)" style="background: #202025; color: #fff; border: 1px solid rgba(168, 85, 247, 0.4); width: 28px; height: 28px; border-radius: 6px; cursor: pointer;">+</button>
                </div>
                <!-- Preço -->
                <div style="font-size: 16px; font-weight: bold; color: var(--roxo-neon, #a855f7); min-width: 80px; text-align: right;">
                    R$ <span class="preco-total-item">40,00</span>
                </div>
                <!-- Remover -->
                <button type="button" onclick="removerItem(this)" style="background: rgba(239, 68, 68, 0.15); color: #ef4444; border: none; padding: 6px 10px; border-radius: 6px; cursor: pointer;">🗑️</button>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="item-carrinho" data-preco="18.00" style="background: var(--fundo-card, #18181b); border: 1px solid rgba(168, 85, 247, 0.2); border-radius: 12px; padding: 15px; display: flex; align-items: center; justify-content: space-between; gap: 15px;">
            <div style="display: flex; align-items: center; gap: 15px;">
                <img src="img/copaogin.png" alt="Copão Gin" style="width: 65px; height: 65px; object-fit: cover; border-radius: 8px;">
                <div>
                    <h4 style="color: #fff; font-size: 15px; margin-bottom: 4px;">Copão Gin Tropical</h4>
                    <p style="color: var(--texto-secundario); font-size: 12px;">700ml // Frutas Secas</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px;">
                <!-- Quantidade -->
                <div style="display: flex; align-items: center; gap: 5px;">
                    <button type="button" onclick="alterarQtd(this, -1)" style="background: #202025; color: #fff; border: 1px solid rgba(168, 85, 247, 0.4); width: 28px; height: 28px; border-radius: 6px; cursor: pointer;">-</button>
                    <input type="text" value="1" class="input-qtd" readonly style="width: 35px; text-align: center; background: #121214; border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 6px; padding: 4px;">
                    <button type="button" onclick="alterarQtd(this, 1)" style="background: type="button" onclick="alterarQtd(this, 1)" style="background: #202025; color: #fff; border: 1px solid rgba(168, 85, 247, 0.4); width: 28px; height: 28px; border-radius: 6px; cursor: pointer;">+</button>
                </div>
                <!-- Preço -->
                <div style="font-size: 16px; font-weight: bold; color: var(--roxo-neon, #a855f7); min-width: 80px; text-align: right;">
                    R$ <span class="preco-total-item">18,00</span>
                </div>
                <!-- Remover -->
                <button type="button" onclick="removerItem(this)" style="background: rgba(239, 68, 68, 0.15); color: #ef4444; border: none; padding: 6px 10px; border-radius: 6px; cursor: pointer;">🗑️</button>
            </div>
        </div>

    </div>

    <!-- Resumo do Pedido -->
    <div style="background: var(--fundo-card, #18181b); border: 1px solid rgba(168, 85, 247, 0.3); border-radius: 12px; padding: 20px;">
        <h3 style="color: #fff; font-size: 16px; margin-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 8px;">Resumo da Compra</h3>
        
        <div style="display: flex; justify-content: space-between; margin-bottom: 10px; color: var(--texto-secundario); font-size: 14px;">
            <span id="contadorItens">Subtotal (2 itens)</span>
            <span>R$ <span id="valorSubtotal">58,00</span></span>
        </div>

        <div style="display: flex; justify-content: space-between; margin-bottom: 15px; color: var(--texto-secundario); font-size: 14px;">
            <span>Taxa de Entrega</span>
            <span style="color: var(--roxo-neon); font-weight: 600;">A calcular</span>
        </div>

        <div style="display: flex; justify-content: space-between; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 12px; font-size: 16px; font-weight: bold; color: #fff; margin-bottom: 20px;">
            <span>Total Estimado</span>
            <span style="color: var(--roxo-neon);">R$ <span id="valorTotal">58,00</span></span>
        </div>

        <!-- Botão Avançar para Pagamento -->
        <a href="pagamento.php" style="display: block; width: 100%; background: var(--roxo-neon, #a855f7); color: #fff; text-align: center; padding: 12px; border-radius: 8px; font-weight: bold; text-decoration: none; box-shadow: 0 0 12px rgba(168,85,247,0.3); transition: background 0.3s;">
            💳 Ir para Forma de Pagamento
        </a>
    </div>
</main>

<script>
function alterarQtd(botao, mudanca) {
    const item = botao.closest('.item-carrinho');
    const input = item.querySelector('.input-qtd');
    let qtd = parseInt(input.value) + mudanca;
    if (qtd < 1) qtd = 1;
    input.value = qtd;
    recalcular();
}

function removerItem(botao) {
    botao.closest('.item-carrinho').remove();
    recalcular();
}

function limparCarrinho() {
    document.getElementById('listaCarrinho').innerHTML = '<p style="color: var(--texto-secundario); text-align: center; padding: 20px;">Carrinho vazio.</p>';
    recalcular();
}

function recalcular() {
    let itens = document.querySelectorAll('.item-carrinho');
    let subtotal = 0;
    let qtdTotal = 0;

    itens.forEach(item => {
        let precoUnit = parseFloat(item.getAttribute('data-preco'));
        let qtd = parseInt(item.querySelector('.input-qtd').value);
        let totalItem = precoUnit * qtd;
        
        item.querySelector('.preco-total-item').textContent = totalItem.toFixed(2).replace('.', ',');
        subtotal += totalItem;
        qtdTotal += qtd;
    });

    document.getElementById('contadorItens').textContent = `Subtotal (${qtdTotal} ${qtdTotal === 1 ? 'item' : 'itens'})`;
    document.getElementById('valorSubtotal').textContent = subtotal.toFixed(2).replace('.', ',');
    document.getElementById('valorTotal').textContent = subtotal.toFixed(2).replace('.', ',');
}
</script>

<?php include 'inc/footer.inc.php'; ?>