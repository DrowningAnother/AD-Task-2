<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favour is in the air.</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <?php include "components/header.php"; ?>
    <div id="main-wrapper">
        <div id="container">
            <div id="main-content">
                <h1>
                    <div class="imagewrap">
                        <div class="image-container">
                            <?php
                            function displayevent($text, $image)
                            {
                                echo $text;
                                if ($image != "x")
                                    echo "<img src=\"assets/img/$image\">";
                            }


                            $extra = array("1" => "Sandwich", "2" => "Pasta", "3" => "Pizza", "4" => "Burger", "5" => "Sushi");
                            $selected = $extra[rand(1, 5)];

                            echo "You have $selected.<br>";

                            $d1 = rand(0, 99);
                            for ($i = 0; $i < $d1 * 0.1; $i++) {
                                echo "o";
                            }
                            echo "<br>";




                            if ($d1 >= 50) {
                                displayevent("You found nothing", "x");
                            } else if ($d1 >= 40) {
                                displayevent("Hush, Jam is sleeping.", "sleeping.jpg");
                            } else if ($d1 >= 30) {
                                displayevent("You found the rizzler!", "Mika.jpg");
                            } else if ($d1 >= 20) {
                                echo "<a href=\"pages/winpage/index.php\">";
                                displayevent("You found the kawasaki!", "kawasaki.jpg");
                                echo "</a>";
                            } else if ($d1 >= 10) {
                                displayevent("JM is sleeping.", "jmsleep.jpg");
                            } else {
                                displayevent("You found a weird person. He is a gamer.", "emirusimp.jpg");
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