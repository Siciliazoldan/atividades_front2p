<?php include 'inc/header.inc.php'; ?>

<main class="container-pagamento" style="width: 90%; max-width: 800px; margin: 30px auto 60px auto;">
    <h2 style="color: #fff; margin-bottom: 25px; border-left: 4px solid var(--roxo-neon); padding-left: 12px; font-size: 22px;">
        Finalizar Pedido // Pagamento & Entrega
    </h2>

    <form action="sucesso.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
        
        <!-- Dados de Endereço -->
        <div style="background: var(--fundo-card, #18181b); border: 1px solid rgba(168, 85, 247, 0.2); border-radius: 12px; padding: 20px;">
            <h3 style="color: #fff; font-size: 16px; margin-bottom: 15px;">📍 Endereço de Entrega</h3>
            
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 15px; margin-bottom: 12px;">
                <div>
                    <label style="color: var(--texto-secundario); font-size: 13px; display: block; margin-bottom: 5px;">Rua / Avenida</label>
                    <input type="text" required placeholder="Ex: Rua XV de Novembro" style="width: 100%; background: #121214; border: 1px solid rgba(255,255,255,0.1); padding: 10px; color: #fff; border-radius: 6px;">
                </div>
                <div>
                    <label style="color: var(--texto-secundario); font-size: 13px; display: block; margin-bottom: 5px;">Número</label>
                    <input type="text" required placeholder="Ex: 123" style="width: 100%; background: #121214; border: 1px solid rgba(255,255,255,0.1); padding: 10px; color: #fff; border-radius: 6px;">
                </div>
            </div>

            <div>
                <label style="color: var(--texto-secundario); font-size: 13px; display: block; margin-bottom: 5px;">Bairro / Referência</label>
                <input type="text" required placeholder="Ex: Centro, próximo à praça" style="width: 100%; background: #121214; border: 1px solid rgba(255,255,255,0.1); padding: 10px; color: #fff; border-radius: 6px;">
            </div>
        </div>

        <!-- Forma de Pagamento -->
        <div style="background: var(--fundo-card, #18181b); border: 1px solid rgba(168, 85, 247, 0.2); border-radius: 12px; padding: 20px;">
            <h3 style="color: #fff; font-size: 16px; margin-bottom: 15px;">💵 Escolha a Forma de Pagamento</h3>
            
            <div style="display: flex; flex-direction: column; gap: 12px;">
                
                <label style="display: flex; align-items: center; gap: 10px; color: #fff; cursor: pointer; background: #121214; padding: 12px; border-radius: 8px; border: 1px solid rgba(168,85,247,0.3);">
                    <input type="radio" name="pagamento" value="pix" checked style="accent-color: var(--roxo-neon);">
                    <span>🟢 <strong>Pix</strong> (Aprovação imediata - Chave CNPJ/Celular)</span>
                </label>

                <label style="display: flex; align-items: center; gap: 10px; color: #fff; cursor: pointer; background: #121214; padding: 12px; border-radius: 8px; border: 1px solid rgba(168,85,247,0.3);">
                    <input type="radio" name="pagamento" value="cartao_entrega" style="accent-color: var(--roxo-neon);">
                    <span>💳 <strong>Cartão (Crédito/Débito)</strong> na Entrega (Leva a maquininha)</span>
                </label>

                <label style="display: flex; align-items: center; gap: 10px; color: #fff; cursor: pointer; background: #121214; padding: 12px; border-radius: 8px; border: 1px solid rgba(168,85,247,0.3);">
                    <input type="radio" name="pagamento" value="dinheiro" style="accent-color: var(--roxo-neon);">
                    <span>💵 <strong>Dinheiro</strong> na Entrega (Informar troco se precisar)</span>
                </label>

            </div>
        </div>

        <!-- Botão Finalizar -->
        <button type="submit" style="display: block; width: 100%; background: #25d366; color: #fff; text-align: center; padding: 14px; border-radius: 8px; font-weight: bold; font-size: 16px; border: none; cursor: pointer; box-shadow: 0 0 15px rgba(37,211,102,0.3); transition: background 0.3s;">
            💬 Enviar Pedido e Finalizar via WhatsApp
        </button>

    </form>
</main>

<?php include 'inc/footer.inc.php'; ?>
