<?php
    
    require "database.php";

    $sql = "SELECT * FROM canadese_recepten";

    $result = mysqli_query($conn,$sql);

    $recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $rowcount = mysqli_num_rows($result);

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
    
    <h1><?php echo $rowcount ?> recepten gevonden</h1>

    <row>

    <?php foreach($recepten as $recept): ?>

        <div class="container">
            <a href="recept.php?id=<?php echo $recept["id"] ?>"><?php echo $recept["naam"] ?></a>
            <img src="<?php echo $recept["foto"] ?>" alt="no foto">
        </div>
        
    <?php endforeach ?>

    </row>

    <?php include "footer.php" ?>
</body>
</html>