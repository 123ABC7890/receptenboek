<?php
    
    require "database.php";

    $sql = "SELECT * FROM canadese_recepten";

    $result = mysqli_query($conn,$sql);

    $recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    
    <?php include "footer.php" ?>
</body>
</html>