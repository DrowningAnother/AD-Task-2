<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favour is in the air.</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div id="header">
        <nav>
            <a href="index.php"> Peculiar Website </a>
        </nav>
    </div>
    <div id="main-wrapper">
        <div id="container">
            <div id="main-content">
                <h1>
                    <div class="imagewrap">
                        <div class="image-container">
                            <?php
                            $d1 = rand(0, 99);
                            for ($i = 0; $i < $d1 * 0.1; $i++) {
                                echo "o";
                            }
                            echo "<br>";
                            if ($d1 >= 50) {
                                echo "You found nothing.";
                            } else if ($d1 >= 40) {
                                echo "Hush, Jam is sleeping.";
                                echo "<img src=\"assets/img/sleeping.jpg\">";
                            } else if ($d1 >= 30) {
                                echo "You found the rizzler!";
                                echo "<img src=\"assets/img/mika.jpg\">";
                            } else if ($d1 >= 20) {
                                echo "You found the Kawasaki!!!<br>Click it to go to the funny page.";
                                echo "<a href=\"pages/winpage/index.php\"><img src=\"assets/img/kawasaki.jpg\"></a>";
                            } else if ($d1 >= 10) {
                                echo "JM is sleeping.!";
                                echo "<img src=\"assets/img/jmsleep.jpg\">";
                            } else {
                                echo "This weird person invites you to a game! <br> He is a gamer.";
                                echo "<img src=\"assets/img/emirusimp.jpg\">";
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