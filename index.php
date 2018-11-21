<?php
include_once 'function.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>10.11</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<style>
    .nav{
        text-transform: uppercase;
    }
</style>
<?php include_once "menu.php"?>


<div class="container">
    <?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
        switch ($page)
        {
            case 1:
                include_once "count.php";
                break;
            case 2:
                include_once "addUser.php";
                break;
            case 3:
                include_once "showUsers.php";
                break;
            default:
                include_once  "count.php";
        }
    }
    else
    {
        include_once "count.php";
    }
    ?>
</div>


<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

