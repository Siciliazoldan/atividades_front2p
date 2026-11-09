// Quantidade (- / +) dentro do card
function alterarQtd(botao, delta) {
    const input = botao.parentElement.querySelector('.input-qtd');
    input.value = Math.min(99, Math.max(1, (parseInt(input.value, 10) || 1) + delta));
}

// Carrinho salvo no navegador (localStorage)
const CHAVE = 'copao_carrinho';
const lerCarrinho = () => { try { return JSON.parse(localStorage.getItem(CHAVE)) || []; } catch (e) { return []; } };
const salvarCarrinho = c => { try { localStorage.setItem(CHAVE, JSON.stringify(c)); } catch (e) {} };

function atualizarBadge() {
    const total = lerCarrinho().reduce((soma, i) => soma + i.qtd, 0);
    const badge = document.getElementById('cart-count');
    if (badge) badge.textContent = total;
}

function mostrarAviso(texto) {
    const el = document.getElementById('toastCarrinho');
    if (!el) return;
    document.getElementById('toastTexto').textContent = texto;
    bootstrap.Toast.getOrCreateInstance(el, { delay: 2500 }).show();
}

document.addEventListener('DOMContentLoaded', () => {
    atualizarBadge();

    document.querySelectorAll('.btn-comprar').forEach(btn => {
        btn.addEventListener('click', () => {
            const qtd = parseInt(btn.closest('.card-produto').querySelector('.input-qtd').value, 10) || 1;
            const carrinho = lerCarrinho();
            const item = carrinho.find(i => i.id === btn.dataset.id);

            if (item) item.qtd += qtd;
            else carrinho.push({ id: btn.dataset.id, nome: btn.dataset.nome, preco: parseFloat(btn.dataset.preco), qtd });

            salvarCarrinho(carrinho);
            atualizarBadge();
            mostrarAviso(qtd + 'x ' + btn.dataset.nome + ' no carrinho');
        });
    });
});

// Altera a quantidade e recalcula o preço exibido no card da home
function alterarQtdHome(botao, mudanca) {
    const card = botao.closest('.card-produto');
    const input = card.querySelector('.input-qtd-mini');
    const spanValor = card.querySelector('.valor-unitario-exibicao');
    const precoBase = parseFloat(card.getAttribute('data-preco'));

    let qtd = parseInt(input.value) + mudanca;
    if (qtd < 1) qtd = 1; // Garante que não fique abaixo de 1
    
    input.value = qtd;

    // Atualiza o preço total do card (Quantidade x Preço Unitário)
    const novoPrecoTotal = precoBase * qtd;
    spanValor.textContent = novoPrecoTotal.toFixed(2).replace('.', ',');
}

// Simula a adição ao carrinho e atualiza o número no topo (ex: Carrinho (0) -> Carrinho (2))
function adicionarAoCarrinho(botao) {
    const card = botao.closest('.card-produto');
    const qtd = parseInt(card.querySelector('.input-qtd-mini').value);

    // Pega o elemento do carrinho no cabeçalho (ex: <a href="carrinho.php">Carrinho (0)</a>)
    const badgeCarrinho = document.querySelector('.btn-carrinho-topo, a[href*="carrinho"]'); 
    
    if (badgeCarrinho) {
        // Extrai a quantidade atual que está entre parênteses no menu superior
        let textoAtual = badgeCarrinho.textContent;
        let regexQtd = /\((\d+)\)/;
        let match = textoAtual.match(regexQtd);
        
        let qtdAtualNoCarrinho = match ? parseInt(match[1]) : 0;
        let novaQtdTotal = qtdAtualNoCarrinho + qtd;

        // Substitui o número antigo pelo novo número total
        badgeCarrinho.textContent = textoAtual.replace(regexQtd, `(${novaQtdTotal})`);
    }

    // Feedback visual rápido de sucesso no botão
    let textoOriginal = botao.textContent;
    botao.textContent = "Adicionado! ✓";
    botao.style.background = "#25d366";
    
    setTimeout(() => {
        botao.textContent = textoOriginal;
        botao.style.background = ""; // Volta para a cor original do tema
    }, 1500);
}
