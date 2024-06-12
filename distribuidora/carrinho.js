let cartItems = [];
let total = 0;

function adicionarAoCarrinho(nome, preco) {
    cartItems.push({ nome, preco });
    total += preco;

    localStorage.setItem('total', total);

    atualizarCarrinho();
    descrescerQuantidade();
}

function atualizarCarrinho() {
    const cartList = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');

    // Limpa a lista
    cartList.innerHTML = '';

    // Adiciona os itens ao carrinho
    cartItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.nome} - $${item.preco.toFixed(2)}`;
        cartList.appendChild(listItem);
    });

    // Atualiza o total
    totalElement.textContent = `Total: $${total.toFixed(2)}`;
}

function limparCarrinho() {
    cartItems = [];
    total = 0;
    atualizarCarrinho();
}

function mostrarCarrinho() {
    const carrinho = document.getElementById('drinksID');
    carrinho.style.display = "flex"
}

function descrescerQuantidade() {
    let quantidadeEstoque = document.querySelectorAll('.quantidadePrduto');
    quantidadeEstoque.forEach (produto => {
        console.log(produto.innerHTML);
        produto.innerHTML --;
    })
    quantidadeEstoque.innerHTML --;
    console.log(quantidadeEstoque);

}

function mostrarBotao(event) {
    // Acessa o elemento específico que foi clicado
    const botaoClicado = event.target;
    console.log(botaoClicado);
  }
  