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
    <div class="frame-top">
        <img src="<?php echo BASE_URL ?>images/barra_superiror.png" alt="" class="" />
    </div>
    <div class="room-container">
        <img src="<?php echo BASE_URL ?>images/estante_open_01.png" alt="" class="room" />
    </div>
    <!--<a href="javascript:void(0);" class="library1" onclick="changeRoomAndRedirect('library1.php');"></a>-->
    <a href="javascript:void(0);" class="library1" onclick="changeRoomAndRedirect('library1.php');"></a>
    <a href="#" class="library2"></a>
    <a href="#" class="library3"></a>
    <a href="#" class="library4"></a>
    <a href="#" class="library5"></a>
    <a href="#" class="library6"></a>
    <div class="frame-bottom">
        <a href="<?php echo BASE_URL ?>city.php">
            <img src="<?php echo BASE_URL ?>images/barra_inferior_voltar_cidade.png" alt="" class="" />
        </a>
    </div>

    <!-- Add Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function () {
            var roomContainer = $('.room-container').show();
            var frameTop = $('.frame-top').show();
            var frameBottom = $('.frame-bottom').show();
        });
    </script>
    <script>
        function changeRoomAndRedirect(destination) {
            var roomContainer = $('.room-container img');
            var images = [
                'estante_open_02.png',
                'estante_open_03.png',
                'estante_open_04.png',
                'estante_open_05.png',
                'estante_open_06.png',
                'estante_open_07.png',
                'estante_open_08.png',
                'estante_open_09.png',
                'estante_open_010.png',
                'estante_open_011.png',
                'estante_open_012.png',
                'estante_open_013.png',
                'estante_open_014.png',
                'estante_open_015.png',
                'estante_open_016.png',
                'estante_open_017.png',
                'estante_open_018.png',
                'estante_open_019.png',
                'estante_open_020.png',
            ];
            var index = 0;

            function changeImage() {
                if (index < images.length) {
                    roomContainer.attr('src', '<?php echo BASE_URL ?>images/' + images[index]);
                    index++;
                    setTimeout(changeImage, 100); // Tempo de transição entre imagens (em milissegundos)
                } else {
                    window.location.href = destination;
                }
            }

            changeImage();
        }
    </script>
</body>

</html>