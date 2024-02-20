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
        <img src="<?php echo BASE_URL ?>/images/barra_superiror.png" alt="" class="" />
    </div>
    <div class="room-container">
        <img src="<?php echo BASE_URL ?>/images/casa_interior_mapa-01.png" alt="" class="room" />
    </div>
    <a href="<?php echo BASE_URL ?>city.php" class="to-city"></a>
    <div class="frame-bottom">
        <img src="<?php echo BASE_URL ?>/images/barra_inferior_edificios.png" alt="" class="" />
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
</body>

</html>