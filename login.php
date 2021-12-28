<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
    <body>
        <div class="vak">
            <div class="logindiv">
                <br>

                <h1 class="login_h1">Create an account to join the Hogwarts Houses</h1>

                <br>

                <img src="./assets/images/hogwartshat.png" alt="Hogwarts" id="hat_img">

                <br>

                <form action="created.php" method="GET">
                    
                    <!--firstname-->
                    <div>
                        <Label for="firstname" class="labelsize">
                            Firstname
                        </Label>
                        <br>
                        <input type="text" name="firstname" id="firstname" class="inputclass" placeholder="fill in your firstname." required>
                    </div>


                    <br>


                    <div>
                        <Label for="lastname" class="labelsize"> 
                            Lastname
                        </Label>
                        <br>
                        <input type="text" name="lastname" id="lastname" class="inputclass" placeholder="fill in your lastname." required>
                    </div>
            

                    <br>
            

                    <div>
                        <Label for="emailadress	" class="labelsize">
                            Email address
                        </Label>
                        <br>
                        <input type="email" name="emailadress" id="emailadress" class="inputclass" placeholder="fill in your email adress." required>
                    </div>
            

                    <br>


                    <!--age-->
                    <div>
                        <label for="age" class="labelsize">
                            Age
                        </label>
                        <br>
                        <input type="number" name="age" id="age" class="inputclass" placeholder="fill in your age." required>
                    </div>
            

                    <br>
                    

                    <button class="Create_account_button">
                        Create account
                    </button>

                </form>


            </div>
        </div>
    </body>
</html>