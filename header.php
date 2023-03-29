<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $filePath = explode("\\", __FILE__);
        $fileName = $filePath[count($filePath) - 1];
        $fileName = ucwords($fileName);
    ?>
    <title><?php echo $fileName?></title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        
        <?php include "nav.php" ?>

    </header>

</body>
</html>