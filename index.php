<!DOCTYPE html>
<?php
require_once 'includes/db.php';
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
        <title>GSM</title>
        <link href="css/style.css" rel="stylesheet" >
    </head>
    <body>
        <h1>GSM Shop</h1>
        <?php
            
            foreach($items as $key => $value) { ?>
                <div class="item">
                    <img src="http://placehold.it/150x100&text=<?= $value['titel'];?>" />
                    <p><a href="basket.php?type=add&id=<?= $value['id'];?>">bestel <?= $value['titel'];?></a></p>
                </div> 
<?php       } ?>
    </body>
</html>
