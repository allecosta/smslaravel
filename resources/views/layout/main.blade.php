<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>SMS Laravel</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/products">SMS Laravel - Sistema de Gerenciamento de Estoque</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/products">Listagem</a></li>
                    <li><a href="/products/new">Novo</a></li>
                </ul>
            </div>
        </nav>

        @yield("content")

        <footer class="footer">
            <p>
                &copy; 
                <script>
                    document.write(new Date().getFullYear());
                </script>
                  - Desenvolvido por Alexandre Costa
            </p>
        </footer>

    </div>
</body>
</html>