<?php
$post_text_link = "postsFolder/post1/post1_text.php"; // Link that contains post1 text
$post_link = "postsFolder/post1/post1.php"; // Post1 link
include($post_text_link); // including post1 text variable
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TestTask1</title>
</head>

<body>

    <div class="container">

        <?php
        $a = mb_substr($post1_text, 0, 180); // gets substring (180 symbols if it more than 180)
        while (mb_substr($a, -1) == " ")
            $a = mb_substr($a, 0, -1); // cuts spaces at the end of while they exists
        $a = $a . '...'; // adds dots after phrase
        $wordsArray = explode(" ", $a);  // explodes string by splitter (space)

        //creating the excerpt
        $excerpt = "<p>";
        if (count($wordsArray) > 2) {
            foreach ($wordsArray as $key => $word) {
                if (count($wordsArray) > 2) {
                    if ($key < count($wordsArray) - 2) {
                        $excerpt .= $word . " ";
                    } elseif ($key == count($wordsArray) - 2) {
                        $excerpt .= "<a href='$post_link'>";
                        $excerpt .= $wordsArray[count($wordsArray) - 2] . " ";
                    } elseif ($key == count($wordsArray) - 1) {
                        $excerpt .= $wordsArray[count($wordsArray) - 1];
                        $excerpt .= "</a>";
                    }
                }
            }
        } else {
            $excerpt .= "<a href='$post_link'>";
            foreach ($wordsArray as $key => $word) {
                if ($key == count($wordsArray) - 1) {
                    $excerpt .= $word;
                    continue;
                }
                $excerpt .= $word . " ";
            }
            $excerpt .= "</a>";
        }
        $excerpt .= "</p>";

        echo $excerpt; // outputs the excerpt

        ?>

    </div>

</body>

</html>