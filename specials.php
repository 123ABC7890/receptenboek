<?php

    require "database.php";

    $sql1 = "SELECT * FROM canadese_recepten  WHERE duur = (SELECT MIN(duur) FROM canadese_recepten)";
    $result = mysqli_query($conn,$sql1);
    $all_recepten_kortst_duurt = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql2 = "SELECT * FROM canadese_recepten WHERE moeilijkheidsgraad = 'Makkelijk te bereiden'";
    $result = mysqli_query($conn,$sql2);
    $all_recepten_Makkelijk = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql3 = "SELECT * FROM canadese_recepten  WHERE hoeveelheid_ing = (SELECT MAX(hoeveelheid_ing) FROM canadese_recepten)";
    $result = mysqli_query($conn,$sql3);
    $all_recepten_Meeste_ingredienten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $filePath = explode("\\", __FILE__);
        $fileName = $filePath[count($filePath) - 1];
        $fileName = ucwords(str_replace(".php", "", $fileName));
    ?>
    <title><?php echo $fileName?></title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    
    <?php include "header.php" ?>
    
    <h1>Snelle recepten</h1>
    <row>
    <?php foreach($all_recepten_kortst_duurt as $recept): ?>

        <div class="container">
            <a href="recept.php?id=<?php echo $recept["id"] ?>"><?php echo $recept["naam"] ?></a>
            <img src="<?php echo $recept["foto"] ?>" alt="no foto">
        </div>

    <?php endforeach ?>
    </row>

    <h1>Makkelijke recepten</h1>
    <row>
    <?php foreach($all_recepten_Makkelijk as $recept): ?>

        <div class="container">
            <a href="recept.php?id=<?php echo $recept["id"] ?>"><?php echo $recept["naam"] ?></a>
            <img src="<?php echo $recept["foto"] ?>" alt="no foto">
        </div>

    <?php endforeach ?>
    </row>
    
    <h1>Meeste ingredienten recepten</h1>
    <row>
    <?php foreach($all_recepten_Meeste_ingredienten as $recept): ?>

        <div class="container">
            <a href="recept.php?id=<?php echo $recept["id"] ?>"><?php echo $recept["naam"] ?></a>
            <img src="<?php echo $recept["foto"] ?>" alt="no foto">
        </div>

    <?php endforeach ?>
    </row>
    
</body>
</html>