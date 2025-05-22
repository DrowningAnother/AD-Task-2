<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you happy?</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <?php
    include '../../components/header.php';
    ?>
    <div id="main-wrapper">
        <div id="container">
            <div id="main-content">
                <h1>
                    <div class="imagewrap">
                        <div class="image-container">
                            <?php
                            echo "I love sandwiches. They are very nice.<br>";
                            for ($i = 0; $i < 10000; $i++) {
                                for ($j = 0; $j < 25; $j++) {
                                    if ($j % 2 == 0) {
                                        echo "_";
                                    } else {
                                        echo ":D";
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