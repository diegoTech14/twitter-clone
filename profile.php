<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>

    <!-- FONTAWESOME CDNs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/b08513b73d.js" crossorigin="anonymous"></script>


    <!-- CSS Links -->
    <link rel="stylesheet" href="css/principal-form.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/lateral_bar.css">
    <link rel="stylesheet" href="css/right-bar.css">
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/tweetBlock.css">
    
</head>

<body>
    <div class="container">
        <div id="barra" class="lateral-bar">

        </div>
        <div class="container-profile" id="container-profile">
            <div class="container-head">
                <div class="frontPage">
                    <img src="" alt="" class="frontPageImage" id="frontPageImage">
                </div>
            </div>
            <div class="description">
                <div class="userName">
                    <h2 id="completeName"></h2>
                    <h3 id="userName"></h3>
                </div>
                <div class="descriptionProfile">
                    <p id="descriptionUser">
                        <div class="metaDescription">
                            <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;<p id="location"></p>
                            &nbsp;&nbsp;<i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;<p id="join-date"></p>                        
                        </div>
                    </p>
                </div>
            </div>
            <div class="profilePhoto">
                <div class="image">
                    <img class="profileImage" id="profilePhoto" src="" alt="">
                    <button class="follow-button">Follow</button>
                </div>
            </div>
            <div class="profile-feed" id="profile-feed">
                
            </div>
        </div>
        <div class="right-bar">
                <i class="fa-solid fa-magnifying-glass" id="icon-search"></i>    
                <input type="text" name="nickname" class="search-twitter" id="nickname" placeholder="Search Twitter">
            
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>