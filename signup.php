<html>
    <head>
        <title>Ally | Login</title>
        <link href = "css/signup-style.css" rel = "stylesheet"  type= "text/css" >
    </head>
    <body>
        
        <div class="hero">
            
            <div class="form-box">
                <div data-bn-type="text" class = "register-title">Signup to Ally</div>
                
                <form action="includes/signup.inc.php" method="post">
                    <div class="form">
                        
                        <div class = "form-group-email">
                            <label class="label-email">Email</label>
                            <input type="text" class="form-input" name="email"> 
                        </div>
                        <div class = "form-group-pwd">
                            <label class="label-password">Password</label>
                            <input type="password" class="form-input" name="password">
                        </div>
                    
                        <a href="" class="createacc-box">
                        <button id = "button" class="btn-createaccount" data-bn-type="button" type ="sumbit" name="submit">Sign Up</button>
                        </a> 
                        </div>
                    </form>
                
                <?php //to display the error message when filling out forms

                    if(isset($_GET["error"])){

                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }

                        else if($_GET["error"] == "emailexists"){
                            echo "<p>Email is already registered!</p>";
                        }
                        else if($_GET["error"] == "stmtfailed"){
                            echo "<p>Something went wrong, try again!</p>";
                        }
                        else if($_GET["error"] == "invalidemail"){
                            echo "<p>Enter a valid email!</p>";
                        }
                        else if($_GET["error"] == "none"){
                            echo "<p>Account created!</p>";
                        }
                    }
                ?>
                </div>
            </div>
           
            
        </div>

        <div class="bg-modal">
        <div class = "modal-content">
                <div type="text" class = "register-title">Are you a?</div>

                <a onclick= modalclose() id = "role-button" class="user-button" >User</a>
                <a onclick = modalclose() id = "role-button" class="care-button">Care Giver</a>
            </form>
        </div>
    </div>

 
    </body>
    <script>
        function modalclose(){
            document.querySelector(".bg-modal").style.display="none";
        }
        document.addEventListener("DOMContentLoaded", function(){
        document.querySelector(".bg-modal").style.display="flex";
        });

        
    
    </script>
</html>