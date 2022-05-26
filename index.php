<?php 

/* Richiamo il componente di classe padre */
require_once __DIR__ . "/class/product.php";
/* Richiamo il componente di classe ereditaria (figlia) */
require_once __DIR__ . "/class/eat.php";
require_once __DIR__ . "/class/user.php";

//var_dump($users);
//var_dump ($ingredient->discount());

//var_dump($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach ($users as $user) { ?>
        <p>i prodotti per <?php echo $user->name ?> costano </p>
        <?php foreach ($ingredient as $product) { ?>
            <p><?php echo $product->title ?></p>
            <p><?php echo $product->kind ?></p>
            <p><?php echo $product->description ?></p>
        <?php } ?>
    <?php } ?>
    
</body>
</html>