<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mochila do Programador - CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Inter", sans-serif;
    }

    .navbar {
      background-color: #212529;
    }

    .navbar-brand {
      color: #fff !important;
      font-weight: 600;
    }

    /* ===== Estilo dos Accordions ===== */
    .accordion {
      border-radius: 15px;
    }

    .accordion-item {
      border: none;
      background: transparent;
    }

    .accordion-button {
      background-color: #fff;
      border-radius: 15px;
      font-size: 1.2rem;
      font-weight: 600;
      padding: 1.8rem 1.5rem;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
      transition: all 0.25s ease-in-out;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .accordion-button i {
      font-size: 1.8rem;
      color: #0d6efd;
    }

    .accordion-button:not(.collapsed) {
      color: #0d6efd;
      background-color: #eaf2ff;
      box-shadow: 0 5px 14px rgba(0, 0, 0, 0.12);
      transform: translateY(-2px);
    }

    .accordion-body {
      background-color: #fff;
      border-radius: 12px;
      padding: 2rem;
      margin-top: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      font-size: 1rem;
    }

    .accordion-body ul {
      padding-left: 0;
    }

    .accordion-body a {
      text-decoration: none;
      color: #0d6efd;
      font-weight: 500;
      transition: 0.2s;
    }

    .accordion-body a:hover {
      color: #084298;
    }

    h2.section-title {
      font-weight: 700;
      margin-bottom: 2.5rem;
      font-size: 1.8rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="./index.php"><i class="bi bi-backpack2-fill me-2"></i>Mochila do Programador</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>

  <!-- Breadcrumb -->
  <div class="container mt-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mochila - CSS</li>
      </ol>
    </nav>
  </div>

  <!-- Conteúdo principal -->
  <main class="container py-5">
    <h3 class="text-center section-title">CSS</h3>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">

        <div class="accordion" id="recursosAccordion">

          <!-- Vídeos -->
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingVideos">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVideos" aria-expanded="false" aria-controls="collapseVideos">
                <i class="bi bi-play-circle-fill"></i> Vídeos
              </button>
            </h2>
            <div id="collapseVideos" class="accordion-collapse collapse" aria-labelledby="headingVideos" data-bs-parent="#recursosAccordion">
              <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                  <li><a href="https://youtu.be/AB35iSr1YyA?si=ahLwA7slqyCSwwnp" target="_blank">Rafaella Ballerini - Aprenda CSS do ZERO até colocar o SITE NO AR</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Cursos -->
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingCursos">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCursos" aria-expanded="false" aria-controls="collapseCursos">
                <i class="bi bi-mortarboard-fill"></i> Cursos Gratuitos
              </button>
            </h2>
            <div id="collapseCursos" class="accordion-collapse collapse" aria-labelledby="headingCursos" data-bs-parent="#recursosAccordion">
              <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                  <li><a href="https://www.cursoemvideo.com/curso/curso-html5-e-css3-modulo-5-de-5-40-horas/" target="_blank">Curso em Vídeo - HTML5 & CSS3</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingCursosPagos">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCursosPagos" aria-expanded="false" aria-controls="collapseCursos">
                <i class="bi bi-mortarboard-fill"></i> Cursos Pagos
              </button>
            </h2>
            <div id="collapseCursosPagos" class="accordion-collapse collapse" aria-labelledby="headingCursosPagos" data-bs-parent="#recursosAccordion">
              <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                  <li><a href="https://www.alura.com.br/cursos-online-front-end/html-css" target="_blank">Alura - HTML5 & CSS</a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Ferramentas -->
          <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="headingFerramentas">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFerramentas" aria-expanded="false" aria-controls="collapseFerramentas">
                <i class="bi bi-tools"></i> Ferramentas Úteis
              </button>
            </h2>
            <div id="collapseFerramentas" class="accordion-collapse collapse" aria-labelledby="headingFerramentas" data-bs-parent="#recursosAccordion">
              <div class="accordion-body">
                <ul class="list-unstyled mb-0">
                  <li><a href="https://www.w3schools.com/css/default.asp" target="_blank">W3Schools - CSS</a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="text-center py-4 bg-dark text-light">
    <small>© 2025 Mochila do Programador — Feito com 💻 e ☕</small>
    <small><center>Por @saviolidev</center></small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
