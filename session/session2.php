<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page 2</h1>
    <?php
        echo $_SESSION["favcolor"] . "<br/>";
        print_r($_SESSION);
    ?>
</body>
</html>