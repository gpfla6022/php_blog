<?php
$dan = 5
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$dan?>단</title>
</head>
<body>
    <h1><?=$dan?>단</h1>
    <hr>
    <?php for($i = 1; $i < 10; $i++){?>
        <div> <?=$dan?> * <?=$i?> = <?= $dan * $i?> </div>
    <?php }?>
</body>
</html>