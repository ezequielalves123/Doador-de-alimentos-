
<div class="content-wrapper">
    <h2>Produtos Cadastrados</h2>
    <nav class="nav-bar">
    <ul>
      <li><a href="/produtos">EXIBIR PRODUTOS</a></li>
      <li><a href="/produtos/novo">Cadastrar de Produtos</a></li>
    </ul>
  </nav>

    <br>
    @if (!isset($produtos) || $produtos->isEmpty())
        <h3 class="no-products">produto cadastrado!</h3>
    @else
    <div class="product-list">
        @foreach ($produtos as $p)
            <div class="product-item">
                <p><strong>Nome:</strong> {{ $p->nome }}</p>
                <p><strong>TESTE:</strong> {{ $p->custo }}</p>
                <p><strong>TESTE:</strong> {{ $p->preco }}</p>
                <p><strong>Quantidade:</strong> {{ $p->quantidade }}</p>
                <div class="product-options">
                    <a href="{{ route('alterar_produto', ['id' => $p->id]) }}">Editar</a> |
                    <a href="{{ route('mostrar_produto', ['id' => $p->id]) }}">Exibir</a> |
                    <a href="{{ route('excluir_produto', ['id' => $p->id]) }}">Excluir</a>
                </div>
            </div>
        @endforeach
    </div>
    <p class="total-products">Produtos cadastrados: {{ $produtos->count() }}</p>
    @endif
</div>

<style>
    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px auto;
        padding: 20px;
        background-color: #f8ecd4;
        border: 5px solid black;
        width: 373px;
        height: 632px;
        box-sizing: border-box;
        overflow-y: auto; /* Adiciona barra de rolagem se o conteúdo exceder a altura */
    }

    .product-list {
        width: 100%;
    }

    .product-item {
        background-color: #f8ecd4;
        border: 1px solid black;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .product-item p {
        margin: 5px 0;
    }

    .product-options {
        margin-top: 10px;
        text-align: center;
    }

    .product-options a {
        text-decoration: none;
        color: #007bff;
    }

    .product-options a:hover {
        text-decoration: underline;
    }

    .total-products {
        font-weight: bold;
        margin-top: 20px;
    }

    .no-products {
        color: #ef233c;
        font-weight: 700;
        text-align: center;
        margin-top: 20px;
    }
</style>
