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
            <div class="created_style">
                <?php
                    include "assets/db/index.php";

                    $firstname = $_GET["firstname"];
                    $lastname = $_GET["lastname"];
                    $emailadress = $_GET["emailadress"];
                    $age = $_GET["age"];

                    $sqlGet = "SELECT * from Users where emailadress like '$emailadress';";
                    $users = $databaselocal->getQuery($sqlGet);

                    if(sizeof($users) > 0 )
                    {
                        ?>
                        <script>
                            alert ("Sorry, this email has already been used.");
                        </script>
                        <?php
                    } 
                    else 
                    {
                        $sqlInsert = "INSERT INTO Users (firstname, lastname, emailadress, age) VALUES ('$firstname', '$lastname', '$emailadress' ,'$age')";
                        $databaselocal->insertQuery($sqlInsert);

                        ?>

                        <h1 class="h1_created">  
                            <?php echo $_GET['firstname'].", ";?> your account has been added to the database!
                        </h1>

                        <img src="./assets/images/harry.gif" alt="harrypotter gif" id="gif">

                        <?php
                    }
                ?>

                <nav>
                    <a href="./index.php" class="nav2">Home</a>
                </nav>
            </div>
        </div>
    

    </body>
</html>
