<!-- RODAPÉ DE MARKETING -->
    <footer class="rodape-marketing">
        <p class="frase-marketing">O combustível oficial do seu final de semana.</p>
    </footer>

    <!-- SCRIPT DE CONTROLE DE QUANTIDADE -->
    <script>
    function alterarQtd(botao, valor) {
        const container = botao.parentElement;
        const input = container.querySelector('.input-qtd');
        let qtdAtual = parseInt(input.value) + valor;
        if (qtdAtual < 1) qtdAtual = 1;
        input.value = qtdAtual;
    }
    </script>

</body>
</html>