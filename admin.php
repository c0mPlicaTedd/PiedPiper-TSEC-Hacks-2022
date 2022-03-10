<html>
    <head>
        <meta name="viewpoint" content="width=device-width , initial-scale=1.0">
        <title>Admin</title>
        <link href="css/admin-style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <img src="images/allyshow_w_1x.png" class="logo">
                <nav>
                <ul>
                    <li><a href="https://drive.google.com/file/d/1v00fQ9upXtBZAWqC5VgPRNSzy0L7HmO0/view?usp=sharing">HOW TO USE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="personal-details.html">PERSONAL DETAILS</a></li>
                    <li><a href="includes/signout.inc.php">LOG OUT</a></li>
                </ul>
            </nav>
            </div>
            <h1 id = "mood">Here's how your User's day has been going:</h1>
            <br>
            <h3>Thought of the day: Laughter is the best medicine you can have </h3>
            
            <div class="row">
                <div class="col">
                    <div class="card card1">
                        <a href="" style="text-decoration:none">
                        <h2>ALLY,</h2>
                        <p id = "suggestion">suggested doing this on the basis of their mood.</p>
                        </a>
                    </div>
                    <div class="card card2">
                        <a href="" style="text-decoration:none">
                        <h2>Medicines</h2>
                        <p>Did User take his daily medicines?</p>
                    </a>
                    <div class="bg-modal">
                    <div class = "modal-content">
                <div type="text" class = "register-title">Are you a?</div>

                <a onclick= modalclose() id = "role-button" class="user-button" >Yes</a>
                <a onclick = modalclose() id = "role-button" class="care-button">No</a>
            </form>
        </div>
                    </div>
                    <div class="card card3">
                        <a href="reminders-index.html" style="text-decoration:none">
                        <h2>Their To do list</h2>
                        <p>Add and view their To-Do List.</p>
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
       
    </body>
    <script>
        var suggestion = localStorage.getItem("suggestion");
        console.log(suggestion);
        document.getElementById("suggestion").innerHTML = "Ally suggested "+suggestion + " to the user.";
        var mood = localStorage.getItem("rating");
        document.getElementById("mood").innerHTML ="Here is how your User's day has been going: "+ mood + "/5";
    </script>
</html>