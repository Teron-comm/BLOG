<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,inital-sacle=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>SITEFLOW</title>
</head>

<body>
    <?php
    require('applications/lib/dev.php');

    use applications\core\Router;

    spl_autoload_register(function ($class) {
        $path = str_replace('\\', '/', $class . '.php');
        if (file_exists($path)) {
            require $path;
        }
    });




    $rounter = new Router;
session_start();

    ?>





</body>

</html>