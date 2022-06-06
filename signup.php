<!doctype html>
<html>
    <header>
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/signupform.css">
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
                        <input type="password" placeholder="Password" name="pwd">
                    </div>
                    <input type="submit" value="Log In">
                    <a href="https://www.youtube.com">Sign Up</a>
                </form> 
            </div>                  
        </nav>

        <section>
            <form id="signupform" action="includes/signup.inc.php" method="POST">
                <div id="FL">
                    <input type="text" placeholder="Firstname" name="firstname">
                    <input type="text" placeholder="Lastname" name="lastname">
                </div>
                <input type="text" placeholder="E-mail" name="mail">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="pwd">
                <input type="password" placeholder="Repeat Password" name="pwd-repeat">
                <div id="button-wrapper">
                    <input type="button" value="CANCEL">
                    <input type="submit" value="Sign In" name="signup_submit">
                </div>
            </form> 
        </section>
    </body>
</html>