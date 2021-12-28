<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="vak">

    <?php
        include "assets/db/index.php";
        
            ?>
            <h1 class="houses_h1">
                Choose the perfect house for: 
            </h1>
                    <div class="housesvak">
                        <div class="padding_house">
                            <img src="./assets/images/Gryffindor.png" alt="gryffindor" class="house_image">
                            <a href="./score.php" class="house_button">Gryffindor</a>
                        </div>
                        <div class="padding_house">
                            <img src="./assets/images/Hufflepuff.png" alt="hufflepuff" class="house_image">
                            <a href="./score.php" class="house_button">Hufflepuff</a>
                        </div>
                        <div class="padding_house">
                            <img src="./assets/images/Ravenclaw.png" alt="ravenclaw" class="house_image" id="ravenclaw_img">
                            <a href="./score.php" class="house_button">Ravenclaw</a>
                        </div>
                        <div class="padding_house">
                            <img src="./assets/images/Slytherin.png" alt="slytherin" class="house_image" id="slytherin_img">
                            <a href="./score.php" class="house_button">Slythering</a>
                            
                        </div>
                    </div>
            <?php
        ?>
    </div>
</body>
</html>