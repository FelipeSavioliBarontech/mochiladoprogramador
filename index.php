<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mochila do Programador</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #eeeeeeff;
            font-family: "Inter", sans-serif;
        }

        .navbar {
            background-color: #212529;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 600;
        }

        .icon-card {
            transition: all 0.2s ease-in-out;
            border: none;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08);
        }

        .icon-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .icon-card i {
            font-size: 2.5rem;
            color: #0d6efd;
        }

        footer{
            margin-top: 2%;
        }
        
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><i class="bi bi-backpack2-fill me-2"></i>Mochila do
                Programador</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <main class="container py-5">
        <h2 class="text-center mb-4 fw-semibold">Escolha Sua Mochila:</h2>
        <div class="row g-4">

            <!-- Linguagens -->
            <div class="col-6 col-md-4">
                <a href="./mochila/html.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-filetype-html"></i>
                        <h6 class="mt-2 text-dark">HTML</h6>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4">
                <a href="./mochila/css.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-filetype-css"></i>
                        <h6 class="mt-2 text-dark">CSS</h6>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4">
                <a href="./mochila/js.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-filetype-js"></i>
                        <h6 class="mt-2 text-dark">Javascript</h6>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="./mochila/php.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-filetype-php"></i>
                        <h6 class="mt-2 text-dark">PHP</h6>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4">
                <a href="./mochila/mysql.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-server"></i>
                        <h6 class="mt-2 text-dark">MySQL</h6>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4">
                <a href="./mochila/git.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-git"></i>
                        <h6 class="mt-2 text-dark">Git/Github</h6>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4">
                <a href="./mochila/api.php" class="text-decoration-none">
                    <div class="card icon-card text-center p-3">
                        <i class="bi bi-braces-asterisk"></i>
                        <h6 class="mt-2 text-dark">API</h6>
                    </div>
                </a>
            </div>

           

        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 bg-dark text-light">
        <small>© 2025 Mochila do Programador — Feito com 💻 e ☕</small>
        <small>
            <center>Por @saviolidev</center>
        </small>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>