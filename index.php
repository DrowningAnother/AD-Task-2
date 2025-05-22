<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favour is in the air.</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <?php
    include 'components/header.php';
    ?>
    <div id="main-wrapper">
        <div id="container">
            <div id="main-content">
                <h1>
                    <div class="imagewrap">
                        <div class="image-container">
                            <?php
                            $backpack = array("1" => "sandwich", "2" => "water", "3" => "fruit", "4" => "snack", "5" => "chocolate", "6" => "candy", "7" => "soda", "8" => "juice", "9" => "chips", "10" => "cookies");
                            function grab($item)
                            {
                                if ($item == "sandwich")
                                    echo "<a href='pages\winpage\index.php'>$item</a>";
                                else
                                    echo "$item";
                            }

                            grab($backpack[rand(1, 10)]);
                            ?>
                        </div>
                    </div>
                </h1>
            </div>
        </div>
</body>

</html>