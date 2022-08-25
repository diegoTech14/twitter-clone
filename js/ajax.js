$(document).on("keypress", regresar);
barra.innerHTML = "<div>"+
    "<ul>"+
    "<i class='fa-brands fa-twitter' id='icon-twitter'></i>"+
    "<li><a href='#'><i class='fa-solid fa-house' id='icon'></i><span>Inicio</span></a></li>"+
    "<li><a href='#'><i class='fa-solid fa-user' id='icon'></i><span>Perfil</span></a></li>"+
    "<li><a href='#'><i class='fa-solid fa-hashtag' id='icon'></i><span>Explorar</span></a></li>"+
    "<li><button class='twittear-button'>Twittear</button></li>"+
    "</ul>"+
"</div>";

function tweetBlock(tweet){
    document.getElementById('profile-feed').innerHTML += "<div class='tweet'>"+
    "<div class='dataProfile'>"+
        "<div>"+
            "<img class='imageProfileTweet' src="+tweet[2] +">"+
        "</div>"+
        "<div>"+
            "<div class='data'>"+ 
            "<p class='completeNameTweet'>"+tweet[3]+"</p>" +"<p class='userNameTweet'>@"+tweet[4]+"</p>"+
            "</div>"+
            "<div class='tweet-text'>"+tweet[0]+"</div>"+
        "</div>"+
        "</div>"+
    
    "<div class='buttons'>"+
        "<i class='fa-regular fa-comment' id='messages-icon'><p class='icon-data'>432</p></i>"+
        "<i class='fa-solid fa-retweet' id='retweet-icon'><p class='icon-data'>432</p></i>"+
        "<i class='fa-regular fa-heart' id='like-icon'><p class='icon-data'>432</p></i>"+
        "<a href='#'><i class='fa-regular fa-share-from-square' id='share-icon'></i></a>"+
    "</div>"
    "</div>";
}

function regresar(){
    
    $.ajax({
        url: 'datos.php',
        type: 'post',
        dataType: 'json',
        data: {
            nickname: $('#nickname').val()
        }
    }).done(
        function(data){
            
            for(let i = 0; i < data[1].length; i++){
                dataTweeter = [data[1][i][0], data[1][i][1], data[0][5], data[0][1], data[0][2]];
                tweetBlock(dataTweeter);
            }
            
            document.getElementById('location').innerHTML = data[0][10];
            document.getElementById('join-date').innerHTML = data[0][7];
            document.getElementById('descriptionUser').innerHTML = data[0][8];
            document.getElementById('completeName').innerHTML = data[0][1];
            document.getElementById('userName').innerHTML = "@"+data[0][2];
            document.getElementById('profilePhoto').src = data[0][5];
            document.getElementById('frontPageImage').src = data[0][6];
            $('#search-twitter').val('');
        }
    );
}

