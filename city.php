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
    <link href="<?php echo BASE_URL; ?>css/style.css?v=6.0" rel="stylesheet">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body>
    <div class="frame-top">
        <img src="<?php echo BASE_URL ?>/images/barra_superiror.png" alt="" class="" />
    </div>
    <div class="main-content">
        <div class="waypoint-casa">
            <a href="<?php echo BASE_URL ?>room.php">
                <img src="<?php echo BASE_URL ?>/images/icon_casa.png" alt="" class="pulsing" />
            </a>
        </div>
        <div class="waypoint-biblioteca">
            <a href="<?php echo BASE_URL ?>library.php">
                <img src="<?php echo BASE_URL ?>/images/icon_biblioteca.png" alt="" class="pulsing" />
            </a>
        </div>
        <div class="viewport"></div>
    </div>
    <div class="frame-bottom">
        <img src="<?php echo BASE_URL ?>/images/barra_inferior.png" alt="" class="" />
    </div>

    <!-- Add Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            var mainContent = $('.main-content').show();
            var frameTop = $('.frame-top').show();
            var frameBottom = $('.frame-bottom').show();
            var waypointCasa = $('.waypoint-casa').show();
            var waypointBiblioteca = $('.waypoint-biblioteca').show();
        });
    </script>
    <script>
        var mainContent = document.querySelector('.main-content');
        var viewport = document.querySelector('.viewport');

        var isDragging = false;
        var startX, startY, startScrollLeft, startScrollTop;

        // Adiciona um ouvinte de evento para detectar início do arrastar
        viewport.addEventListener('mousedown', function (e) {
            isDragging = true;
            viewport.style.cursor = "grabbing";
            startX = e.pageX - mainContent.offsetLeft;
            startY = e.pageY - mainContent.offsetTop;
            startScrollLeft = mainContent.scrollLeft;
            startScrollTop = mainContent.scrollTop;
        });

        // Adiciona um ouvinte de evento para rastrear o movimento do mouse durante o arrastar
        document.addEventListener('mousemove', function (e) {
            if (!isDragging) return;

            var offsetX = e.pageX - startX;
            var offsetY = e.pageY - startY;

            mainContent.scrollLeft = startScrollLeft - offsetX;
            mainContent.scrollTop = startScrollTop - offsetY;
        });

        // Adiciona um ouvinte de evento para detectar o final do arrastar
        document.addEventListener('mouseup', function () {
            viewport.style.cursor = "grab";
            isDragging = false;
        });

        // Adiciona um ouvinte de evento para detectar o scroll na direção horizontal
        mainContent.addEventListener('wheel', function (e) {
            if (e.deltaX !== 0) {
                mainContent.scrollLeft += e.deltaX;
            } else if (e.deltaY !== 0) {
                mainContent.scrollTop += e.deltaY;
            }
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