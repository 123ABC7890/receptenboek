


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

        <nav id="left">
            <a href="recepten.php">Recepten</a>
            <a href="specials.php">Specials</a>
        </nav>
        <nav id="middle">
            <a href="index.php">Receptenboek</a>
        </nav>
        <!-- <nav id="right">
            <a href="">Right1</a>
            <a href="">Right2</a>
        </nav> -->

</body>
</html>