<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1.0">
  <!-- MEUS ESTILOS -->
  <link href="./css/estilos.css" rel="stylesheet">
  <link href="./css/sidebar.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Pesquisa CEP -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/buscacep.js"></script>
  <!-- API KEY GOOGLE MAPS -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEfuEc51rYqxv3Z8tNmWOanZqE5Lq4unc" type="text/javascript"></script>
</head>

<body class="bg-light">

  <!-- INICIO NAVBAR -->
  <div class="row td-main-navbar" style="width: 100%;">
    <!-- BOTAO NAVBAR-->
    <nav class="navbar shadow navbar-expand-lg navbar-light bg-white">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- USUARIO NAVBAR-->
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>Usuário</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#"><i class="bi bi-person-bounding-box" style="margin-right: 5px;"></i>Perfil</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-right" style="margin-right: 5px;"></i>Sair</a></li>
        </ul>
      </div>
      <!-- IMAGEM NAVBAR -->
      <a class="navbar-brand" href="#"><img src="./img/03.png" class="img-fluid" width=70 height=50></a>

      <!-- MENU NAVBAR -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav container align-items-center">
          <li class="nav-item active">
            <a class="nav-link" href="?pagina=inicio"><span>Início</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?pagina=clientes"><span>Clientes</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?pagina=ordens"><span>Ordens de Serviço</span></a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark collapsed" data-bs-toggle="collapse" data-bs-target="#processos" aria-expanded="false">
              <span>Processos</span>
            </a>
            <div class="collapse" id="processos">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="?pagina=pbombeiro" class="link-dark rounded">Bombeiro</a></li>
                <li><a href="?pagina=pcabine" class="link-dark rounded">Cabine</a></li>
                <li><a href="?pagina=pcetesb" class="link-dark rounded">Cetesb</a></li>
                <li><a href="?pagina=plta" class="link-dark rounded">LTA</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="?pagina=usuarios"><span>Usuários</span></a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark collapsed" data-bs-toggle="collapse" data-bs-target="#calculo" aria-expanded="false">
              <span>Cálculo</span>
            </a>
            <div class="collapse" id="calculo">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="?pagina=ctensao" class="link-dark rounded">Tensão</a></li>
                <li><a href="?pagina=celetroduto" class="link-dark rounded">Eletroduto</a></li>
                <li><a href="?pagina=cdemanda" class="link-dark rounded">Demanda</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link link-dark collapsed" data-bs-toggle="collapse" data-bs-target="#normas" aria-expanded="false">
              <span>Normas Técnicas</span>
            </a>
            <div class="collapse" id="normas">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="?pagina=nenel" class="link-dark rounded"><span>ENEL</span> </a></li>
                <li><a href="?pagina=nbombeiro" class="link-dark rounded"><span>Bombeiro</span></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--  SIDEBAR -->
  </div>
  <!-- FIM NAVBAR -->

  <!-- CABEÇALHO -->
  <div class="flex-row" style="background:#163466; border-top-style: solid; border-top-color: #163466;border-width: 5px;">
    <span class="main-header" style="color: white; font-size:120%;"><?php
                                                                    if (isset($_GET['pagina'])) {

                                                                      switch ($_GET['pagina']) {
                                                                        case 'inicio':
                                                                          echo 'Inicio';
                                                                          break;
                                                                        case 'clientes':
                                                                          echo 'Clientes';
                                                                          break;
                                                                        case 'ordens':
                                                                          echo 'Ordens de Serviço';
                                                                          break;
                                                                        case 'pbombeiro':
                                                                          echo 'Processos Bombeiro';
                                                                          break;
                                                                        case 'pcabine':
                                                                          echo 'Processos Cabine';
                                                                          break;
                                                                        case 'pcetesb':
                                                                          echo 'Processos Cetesb';
                                                                          break;
                                                                        case 'plta':
                                                                          echo 'Processos LTA';
                                                                          break;
                                                                        case 'usuarios':
                                                                          echo 'Usuários';
                                                                          break;
                                                                        case 'ctensao':
                                                                          echo 'Queda de Tensão';
                                                                          break;
                                                                        case 'celetroduto':
                                                                          echo 'Ocupação de Eletroduto';
                                                                          break;
                                                                        case 'cdemanda':
                                                                          echo 'Calculo de Demanda';
                                                                          break;
                                                                        case 'nenel':
                                                                          echo 'Normas Enel';
                                                                          break;
                                                                        case 'nbombeiro':
                                                                          echo 'Normas Bombeiro';
                                                                          break;

                                                                        default:
                                                                          echo '';
                                                                          break;
                                                                      }
                                                                    } else {
                                                                      echo 'Inicio';
                                                                    }
                                                                    ?></span>
  </div>
  <div class="flex-row " style="border-top-style: solid; border-top-color: #fe4816;border-width: 10px;">
    <!-- INICIO SIDEBAR -->
    <div class="col-auto td-main-sidebar">
      <div class="shadow min-vh-100 d-flex flex-column flex-shrink-0 bg-white sidebar">
        <!-- IMAGEM SIDEBAR -->
        <img src="./img/01.png" class="img-fluid" alt="Imagem responsiva">
        <!-- MENU SIDEBAR -->
        <hr>
        <?php
        $ativo1 = 'active';
        if (isset($_GET['pagina'])) {
          switch ($_GET['pagina']) {
            case 'inicio':
              $ativo1 = 'active';
              break;
            case 'clientes':
              $ativo2 = 'active';
              $ativo1 = '';
              break;
            case 'ordens':
              $ativo7 = 'active';
              $ativo1 = '';
              break;
            case 'pbombeiro':
              $ativo3 = 'active';
              $ativo1 = '';
              break;
            case 'pcabine':
              $ativo3 = 'active';
              $ativo1 = '';
              break;
            case 'pcetesb':
              $ativo3 = 'active';
              $ativo1 = '';
              break;
            case 'plta':
              $ativo3 = 'active';
              $ativo1 = '';
              break;
            case 'usuarios':
              $ativo4 = 'active';
              $ativo1 = '';
              break;
            case 'ctensao':
              $ativo5 = 'active';
              $ativo1 = '';
              break;
            case 'celetroduto':
              $ativo5 = 'active';
              $ativo1 = '';
              break;
            case 'cdemanda':
              $ativo5 = 'active';
              $ativo1 = '';
              break;
            case 'nenel':
              $ativo6 = 'active';
              $ativo1 = '';
              break;
            case 'nbombeiro':
              $ativo6 = 'active';
              $ativo1 = '';
              break;
            default:
              $ativo1 = '';
              $ativo2 = '';
              $ativo3 = '';
              $ativo4 = '';
              $ativo5 = '';
              $ativo6 = '';
              $ativo7 = '';
              break;
          }
        }
        ?>
        <ul class="menu nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="?pagina=inicio" class="nav-link link-dark <?php echo $ativo1; ?>" aria-current="page">
              <span><i class="bi bi-house"></i>
                Início</span>
            </a>
          </li>
          <li>
            <a href="?pagina=clientes" class="nav-link link-dark <?php echo $ativo2; ?>">
              <span><i class="bi bi-people"></i>
                Clientes</span>
            </a>
          </li>
          <li>
            <a href="?pagina=ordens" class="nav-link link-dark <?php echo $ativo7; ?>">
              <span><i class="bi bi-check2-square"></i>
                Ordens</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark <?php echo $ativo3; ?> collapsed" data-bs-toggle="collapse" data-bs-target="#processos" aria-expanded="false">
              <span><i class="bi bi-pencil-square"></i>
                Processos</span>
            </a>
            <div class="collapse" id="processos">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="?pagina=pbombeiro" class="link-dark rounded"><span>Bombeiro</span></a></li>
                <li><a href="?pagina=pcabine" class="link-dark rounded"><span>Cabine</span></a></li>
                <li><a href="?pagina=pcetesb" class="link-dark rounded"><span>Cetesb</span></a></li>
                <li><a href="?pagina=plta" class="link-dark rounded"><span>LTA</span></a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="?pagina=usuarios" class="nav-link link-dark <?php echo $ativo4; ?>">
              <span><i class="bi bi-person-badge"></i>
                Usuários</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark collapsed <?php echo $ativo5; ?>" data-bs-toggle="collapse" data-bs-target="#calculo" aria-expanded="false">
              <span><i class="bi bi-calculator"></i>
                Cálculo</span>
            </a>
            <div class="collapse" id="calculo">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="?pagina=ctensao" class="link-dark rounded"><span>Queda de Tensão</span> </a></li>
                <li><a href="?pagina=celetroduto" class="link-dark rounded"><span>Eletroduto</span></a></li>
                <li><a href="?pagina=cdemanda" class="link-dark rounded"><span>Demanda</span></a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link link-dark collapsed <?php echo $ativo6; ?>" data-bs-toggle="collapse" data-bs-target="#normas" aria-expanded="false">
              <span><i class="bi bi-book"></i>
                Normas Técnicas</span>
            </a>
            <div class="collapse" id="normas">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                <li><a href="?pagina=nenel" class="link-dark rounded"><span>ENEL</span> </a></li>
                <li><a href="?pagina=nbombeiro" class="link-dark rounded"><span>Bombeiro</span></a></li>
              </ul>
            </div>
          </li>
        </ul>
        <hr>
        <!-- USUÁRIO SIDEBAR -->
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Usuário</strong>
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-bounding-box" style="margin-right: 5px;"></i>Perfil</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-right" style="margin-right: 5px;"></i>Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- FIM SIDEBAR -->

    <!-- CONTEÚDO -->
    <div class="col-auto td-main-content my-4">
      <?php
      if (isset($_GET['pagina'])) {
        switch ($_GET['pagina']) {
          case 'inicio':
            include './includes/home.php';
            break;
          case 'clientes':
            include './includes/clientes.php';
            break;
          case 'clientes-add-erro':
            include './includes/return/erro.php';
            include './includes/clientes.php';
            break;
          case 'clientes-add-ok':
            include './includes/return/sucesso.php';
            include './includes/clientes.php';
            break;
          case 'clientes_view':
            include './includes/sub/clientes_view.php';
            break;

          case 'clientes_edit':
            include './includes/sub/clientes_edit.php';
            break;
          case 'ordens':
            include './includes/ordens.php';
            break;
          case 'ordens_edit':
            include './includes/sub/ordens_edit.php';
            break;
          case 'ordens_view':
            include './includes/sub/ordens_view.php';
            break;
          case 'pbombeiro':
            include './includes/pbombeiro.php';
            break;
          case 'pbombeiro_edit':
            include './includes/sub/pbombeiro_edit.php';
            break;
          case 'pcabine':
            include './includes/pcabine.php';
            break;
          case 'plta':
            include './includes/plta.php';
            break;
          case 'pcetesb':
            include './includes/pcetesb.php';
            break;
          case 'usuarios':
            include './includes/usuarios.php';
            break;
          case 'ctensao':
            include './includes/ctensao.php';
            break;
          case 'celetroduto':
            include './includes/celetroduto.php';
            break;
          case 'cdemanda':
            include './includes/cdemanda.php';
            break;
          case 'nenel':
            include './includes/cenel.php';
            break;
          case 'nbombeiro':
            include './includes/nbombeiro.php';
            break;

          default:
            include './includes/home.php';
            break;
        }
      } else {

        include './includes/home.php';
      }
      ?>
    </div>

  </div>

  <!-- FONTAWESOME ICONS -->
  <script src="https://kit.fontawesome.com/17040bbfa3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Script menu usuario -->
  <script type="text/javascript">
    (function() {
      'use strict'
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      tooltipTriggerList.forEach(function(tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
      })
    })()
  </script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
  <script src="js/cidades.js"></script>
  <script src="js/mascaras.js"></script>
  <script src="js/mascaracpfcnpj.js"></script>
  <script src="js/validacpfcnpj.js"></script>
  <script src="js/scripts.js"></script>
  <!-- Latest compiled and minified CSS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>