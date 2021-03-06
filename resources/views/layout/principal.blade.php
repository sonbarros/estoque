<!DOCTYPE html>
<html>
<head>
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Controle de estoque</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">      
                    <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('ProdutoController@listar') }}">Listagem</a></li>
                    <li><a href="/produtos/novo">Cadastrar</a></li>
                </ul>
            </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>© Curso de Laravel do Alura.</p>
        </footer>

    </div>
</body>
</html>


