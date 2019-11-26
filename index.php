<?php
    include_once('signUp.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>

<body>
    <h1>
        HELI-REP
    </h1>
    </br>
    <h2>
        Hola
        <?php
            echo " $user_1->name $user_1->lastName";
        ?>
    </h2>
</body>

</html>