<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo">
    <link rel=" stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="BCstyle.css">
    <title>Document</title>
</head>

<body>

    <div class="header">
        <div class="site-name">
            <a href="index.html">
                <h1>BCD</h1>
            </a>
        </div>
        <div class="site-nav">
            <a href="login.html"><i class="material-icons nav">account_circle</i></a>
            <?php

echo "welcome " . $_POST["name"] . "<br>";
echo "your email is: " . $_POST["email"] . "<br>";
?>
            <!--<a href="search.html"><button class="nav">search</button></a>-->
        </div>
    </div>

    <div class="search-image">
        <div class="search-text" style="font-size: 50px;">
            <p>Know what you're <br> looking for?<br>
                <a href="search.html"><button>Search</button></a>
            </p>
        </div>
    </div>


    <footer>
        <div class="footer-container">
            <div class="content">
                <h3 class="footer-menu">navigation</h3>
                <ul>
                    <a href="index.html">
                        <li>home</li>
                    </a>
                    <a href="search.html">
                        <li>search</li>
                    </a>
                    <a href="login.html">
                        <li>login</li>
                    </a>
                </ul>
            </div>
            <div class="content">
                <h3 class="footer-menu">social</h3>
            </div>
            <div class="content">
                <h3 class="footer-menu">about</h3>
                <ul>
                    <li>matt macari</li>
                    <li>matthew marcotullio</li>
                    <li>lily yassemi</li>
                    <li>dylan lucas</li>
                    <li>alex georgopolis</li>
                    <li>katherine lopez</li>
                </ul>
            </div>

        </div>
    </footer>

</body>

</html>