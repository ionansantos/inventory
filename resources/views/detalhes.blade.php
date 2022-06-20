
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <title>Controle de Estoque</title>
    </head>
    <body>
        <div class="container">
            <h1>Detalhes do produto: <?= $p->nome ?></h1>
            <ul list-unstyled>
                <li>
                    <b>Valor:  R$ <?= $p->valor ?></b>
                </li>
                <li>
                    <b>Descrição:  <?= $p->descricao ?></b>
                </li>
                <li>
                    <b>Quantidade em estoque: <?= $p->quantidade ?></b>
                </li>
            </ul>
            <button>
                <a href="/produtos">Voltar</a>
            </button>
        </div>
    </body>
</html>