<html>
    <head>
        <title>Ally | Login</title>
        <link href = "css/signup-style.css" rel = "stylesheet"  type= "text/css" >
    </head>
    <body>
        
        <div class="hero">
            
            <div class="form-box">
                <div data-bn-type="text" class = "register-title">Login to Ally</div>
                
                <form action="includes/login.inc.php" method="post">
                    <div class="form">
                        <div class="image-insertion" >
                        
                        <div class = "form-group-email">
                            <label class="label-email">Email</label>
                            <input type="text" class="form-input" name="email"> 
                        </div>
                        <div class = "form-group-pwd">
                            <label class="label-password">Password</label>
                            <input type="password" class="form-input" name="password">
                        </div>
                        <br>
                        <input type="checkbox" class="check-box"><span class="checkbox-styling">Remember Me</span>
                        <br>
                        <a href="signup.php" class="createaccount">Create an account</a>
                        <a href="" class="createacc-box">
                        <button class="btn-createaccount" data-bn-type="button" type ="sumbit" name="submit">Log In</button>
                        </a> 
                        </div>
                        
                    </form>
                <?php //to display the error message when filling out forms

                    if(isset($_GET["error"])){

                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }

                        else if($_GET["error"] == "incorrectdetails"){
                            echo "<p>Incorrect Login details!</p>";
                        }
                        
                    }
                ?>
            </div>
            </div>
            
        </div>

    </body>
</html>