<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you happy?</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div id="header">
        <nav>
            <a href="index.php"> What is real, in the end? </a>
        </nav>
    </div>
    <div id="main-wrapper">
        <div id="container">
            <div id="main-content">
                <h1>
                    <div class="imagewrap">
                        <div class="image-container">
                            <?php
                            echo "Are you truly satisfied with all that you have? If the many things that has lead you this far did not exist, would you still have gone to this point? Though none of that really matters. In the end, you are here now and you should be proud of that. Always strive to better yourself. <br>";
                            for ($i = 0; $i < 10000; $i++) {
                                for ($j = 0; $j < 25; $j++) {
                                    if ($j % 2 == 0) {
                                        echo "_";
                                    } else {
                                        echo "T";
                                    }
                                }
                                echo "<br>";
                            }
                            ?>
                        </div>
                    </div>
                </h1>
            </div>
        </div>
    </div>
    <?php
    ?>
</body>

</html>