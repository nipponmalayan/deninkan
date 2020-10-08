<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget fringilla nibh. Pellentesque luctus ultrices.">
        <meta name=viewport content="width=device-width, initial scale=1">
        <title></title>
        
    </head>
    <body>

        <header>
            <nav>
                <a href="">
                    <img src="https://github.com/nipponmalayan/deninkan/blob/master/Source/%5BAssets%5D/deninkan.png" alt="deninkan.io">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
                <div>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="uid" placeholder="username / e-mail">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="login-req">login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-req">logout</button>
                    </form>
                </div>
            </nav>
        </header>