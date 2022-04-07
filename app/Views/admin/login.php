<?php
session_start();

if (isset($_SESSION["login"])) { ?>
  <script>
    window.location.href = "<?= base_url("admin") ?>";
  </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/public/assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!-- alertify -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/assets/alertify/alertify.css" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>/public/assets/admin/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/public/assets/admin/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url() ?>/public/assets/admin/css/material-dashboard.css?v=3.0.1" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Admin Panel</h4>
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form autocomplete="off" role="form" class="text-start">
                  <div class="input-group input-group-static mb-4">
                    <label>Usuario</label>
                    <input id="usuario" name="usuario" type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-static mb-4">
                    <label>Contraseña</label>
                    <input id="pass" name="pass" type="password" class="form-control">
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button id="btnEntrar" type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Entrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <!-- jquery 3.6.0 -->
  <script src="<?= base_url() ?>/public/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/admin/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/admin/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- alertify -->
  <script src="<?= base_url() ?>/public/assets/alertify/alertify.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script>
    $(document).ready(function() {
      $("#btnEntrar").click(function(e) {
        let usuarios = $("#usuario").val();
        let pass = $("#pass").val();

        $.ajax({
          type: "post",
          url: "loginEntrar",
          data: {
            "usuario": usuarios,
            "pass": pass
          },
          success: function(response) {
            if (response.notificaion == 1) {
              window.location.href = "admin";
            } else {
              alertify.set('notifier', 'position', 'top-right');
              alertify.success("Usuario No Encontrado");
            }
            // console.log(response.notificaion);

          }
        });

      });
    });
  </script>

</body>


</html>