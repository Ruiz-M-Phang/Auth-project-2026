<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>appjam Auth</title>
</head>
<body>
    <?php
    function viewDir(){
        $views = "../views/";
        return $views;
    }
        
    include_once( viewDir() . "front-page.php");

    ?>
</body>
<script src="./assets/js/script.js" defer></script>
</html>