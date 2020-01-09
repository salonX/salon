<?php
include "../common/all_header_files.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user profile</title>
</head>
<body>
    <?php include "../nav/inner_top.php" ?>
    <!-- checking is user login -->
    <?php if(!isset($_SESSION['user']) || !isset($_SESSION['role'])){ header("Location: ../");}?>
    <!-- chck the exxist person iser user or salon -->
    

</body>
</html>