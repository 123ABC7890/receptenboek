<?php

    require "database.php";
    
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM canadese_recepten WHERE id = $id";

    $result = mysqli_query($conn,$sql);

    $recept = mysqli_fetch_assoc($result);

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

    <row>

        
        <div class="container" style="margin-top:0px;">
            
            <h1><?php echo $recept["naam"] ?></h1>
            <img src="<?php echo $recept["foto"] ?>" alt="no foto">
            
        </div>
        <div>

            <h2>Duur: <?php echo $recept["duur"] ?> minuten</h2>
            
            <h2>Moeilijkheidsgraad: <?php echo $recept["moeilijkheidsgraad"] ?></h2>
            
            <h2>Menugang: <?php echo $recept["menugang"] ?></h2>
            
            <h2>Ingrediënten: <?php echo $recept["hoeveelheid_ing"] ?></h2>

        </div>
    </row>
    <h1>Bereiding</h1>
    <p style="padding-left:30px; border-left: 3px solid white; border-radius: 10px; margin-left: 70px;"><?php echo $recept["bereiding"] ?></p>

    <?php include "footer.php" ?>

</body>
</html>