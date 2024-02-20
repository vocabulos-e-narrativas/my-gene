<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY GENE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body>

    <!-- Your content goes here -->
    <div class="mygene-loading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 text-center">
                    <img src="<?php echo BASE_URL ?>/images/marca-de-agua.svg" class="marca-de-agua" alt="" />
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <img src="<?php echo BASE_URL ?>/images/logo_my.svg" class="logo_my" alt="" />
                </div>
                <div class="col-4 text-center">
                    <img src="<?php echo BASE_URL ?>/images/marca-de-agua.svg" class="marca-de-agua" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="frame-top">
        <img src="<?php echo BASE_URL ?>/images/barra_superiror.png" alt="" class="" />
    </div>
    <div class="room-container">
        <img src="<?php echo BASE_URL ?>/images/casa_interior-00-01.png" alt="" class="room" />
        <a href="<?php echo BASE_URL ?>room.php">
            <img src="<?php echo BASE_URL ?>/images/+18.png" alt="" class="plus18" />
        </a>
        <a href="https://www.up.pt/playtheodds/" target="_blank">
            <img src="<?php echo BASE_URL ?>/images/-18.png" alt="" class="less18" />
        </a>
    </div>
    <div class="frame-bottom">
        <img src="<?php echo BASE_URL ?>/images/barra_inferior_bem-vindo.png" alt="" class="" />
    </div>

    <!-- Add Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            // Simular um atraso de 2 segundos (2000 milissegundos)
            setTimeout(function () {
                // Esconder a tela de carregamento
                var mygeneLoading = $('.mygene-loading');
                var mainContent = $('.main-content');
                var frameTop = $('.frame-top');
                var frameBottom = $('.frame-bottom');
                var roomContainer = $('.room-container');

                mygeneLoading.hide();
                mainContent.show();
                frameTop.show();
                frameBottom.show();
                roomContainer.show();
            }, 2000);
        });
    </script>
    <script>
        $(window).on('load', function () {
            // Agora usando o evento 'load' para garantir que todos os elementos estejam carregados
            var mainContent = $('.main-content');
            var scrollPosition = (mainContent.prop("scrollWidth") - mainContent.width()) / 1.5;
            mainContent.scrollLeft(scrollPosition);
        });
    </script>

</body>

</html>