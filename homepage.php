<html>
    <head>
        <meta name="viewpoint" content="width=device-width , initial-scale=1.0">
        <title>HomePage</title>
        <link href="css/homepage-styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <img src="assets/img/allyshow_w_1x.svg" class="logo">
                <nav>
                <ul>
                    <li><a href="">HOW TO USE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="">PERSONAL DETAILS</a></li>
                    <li><a href="includes/signout.inc.php">LOG OUT</a></li>
                </ul>
            </nav>
            </div>
            <h3 id="suggestion" >Ally Suggestion: </h3>
            <h3>Thought of the day: Laughter is the best medicine you can have </h3>
            <h3>Please Rate your mood right now using the scale given below</h3>
            <div class="slidecontainer">
                <input type="range" min="1" max="5" value="3" class="slider" id="myRange">
              </div>
              
            <div class="row">
                <div class="col">
                    <div class="card card1">
                        <a href="crossword.html" style="text-decoration:none">
                        <h5>Games</h5>
                        <p>A bunch of games to keep your mind exercised</p>
                        </a>
                    </div>
                    <div class="card card2">
                        <a href="" style="text-decoration:none">
                        <h5>Memories</h5>
                        <p>A bunch of games to keep your mind exercised</p>
                    </a>
                    </div>
                    <div class="card card3">
                        <a href="reminders-index.html" style="text-decoration:none">
                        <h5>To do list</h5>
                        <p>A bunch of games to keep your mind exercised</p>
                        </a>
                    </div>
                    <div class="card card4">
                        <a href="" style="text-decoration:none">
                        <h5>Relations</h5>
                        <p>Plans of the day</p>
                    </a>
                    </div>
                    
                    <div class="card card5">
                        <a href="https://youtube.com/playlist?list=PLD72Ylz-Y01vcGTYmEaN9nz02o0yZMWy8" target="_blank" style="text-decoration:none">
                        <h5>Feel Good</h5>
                        <p>Alot of photos reminding you of your friends and family</p>
                        </a>
                    </div>
                

                </div>
            </div>
        </div>
       
    </body>
    <script src = "js/ally-suggestion.js"></script>
    <script>
        
createSugesstion();
        var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
    
    </script>
    
</html>