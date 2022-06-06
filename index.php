<!doctype html>
<html>
    <header>
        <link rel="stylesheet" href="css/nav.css">
    </header>
    <body>
        <nav id="main-nav">
            <div id="left">
              <img src="images/logo.png" alt="logo">  
              <a href="index.php">Home</a>
              <a href="index.php">Settings</a>
              <a href="index.php">Profile</a>
            </div>

            <div id="right">
                <form action="includes/login.inc.php" method="POST">
                    <div id="EP">
                        <input type="text" placeholder="E-mail" name="mail">
                        <input type="password" placeholder="Password" name="pwdp">
                    </div>
                    <input type="submit" value="Log In">
                    <a href="signup.php">Sign Up</a>
                </form> 
            </div>                  
        </nav>
    </body>
</html>