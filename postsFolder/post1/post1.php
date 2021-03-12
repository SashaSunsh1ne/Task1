<?php
$link = "post1_text.php"; // Link that contains post1 text
include($link); // including post1 text variable
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>TestTast1 - Post1</title>
</head>

<body>

    <div class="container">

        <?php
        echo '<p>' . $post1_text . '</p>'; // output
        ?>

    </div>

</body>

</html>