<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $titulo?></title>
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/vovo.svg')?>" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/css/styles.css')?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">PreviCalc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
        <!-- Header-->
        <header class="text-white"  style="background-image: url('<?= base_url('assets/img/fundo1.svg')?>');">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bem-vindo!</h1>
                <p class="lead fw-bolder">O PreviCalc é um site que vai te ajudar a calcular sua Previdência Social.</p><br><br>
            </div>
        </header>
        <!-- About section--><br>
        <section class="py-4 py-md-13">
      <div class="container">
          <div class="row">
            
            <div class="col-12 col-md-6">
              
              <!-- Heading -->
              <h3>
                Aposentadoria Comum
              </h3>
              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Calcule quanto tempo você ainda tem que contribuir até poder requisitar a sua aposentadoria, e também calcule o quanto você contribui mensalmente.
              </p>
              <div class="py-3 mb-6 mb-md-0">
              	<a href="<?= base_url('')?>index.php/calculacomumpublico" class="btn btn-primary">Serviço Público</a>
                <a href="<?= base_url('')?>index.php/calculacomumprivado" class="btn btn-primary">Serviço Privado</a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <!-- Heading -->
              <h3>
                Aposentadoria Especial
              </h3>
              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Calcule quanto tempo você ainda tem que contribuir até poder requisitar a sua aposentadoria, e também calcule o quanto você contribui mensalmente.
              </p>
              <div class="py-3 mb-6 mb-md-0">
              	<a href="<?= base_url('')?>index.php/calculaespecial" class="btn btn-primary">Calcular</a>
              </div>
            </div>
        </div> <!-- / .container -->
    </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright&copy;EmersonBraga2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>