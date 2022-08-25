<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>

    <!-- FONTAWESOME CDNs -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- CSS Links -->
    <link rel="stylesheet" href="css/principal-form.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/general.css">

</head>

<body>


    <div class="container"> 
        <div class="left-div">
            <img src="src/twitterBackground.png" alt="Twitter Background">
        </div>

        <div class="right-div">

            <form action="signin.php" method="POST" class="principal-form">

                <i class="fa fa-twitter" aria-hidden="false" id="twitter-icon"></i>
                <h1>Happening now</h1>
                <h2>Join Twitter today.</h2>
                <div class="fields-panel">

                    <label for="email">E-mail</label>
                    <input type="text" class="email" name="email">

                    <label for="">Password</label>
                    <input type="password" class="password" name="password">

                    <button class="sing-in">Sing In</button>
                </div>

            </form>
        </div>
    </div>

    

</body>

<script src="https://kit.fontawesome.com/b08513b73d.js" crossorigin="anonymous"></script>

</html>