<html>
    <head>
    
        <title>
            Create an account
        </title>
            <?php require_once('header.php'); ?>
            <meta charset="UTF-8">
            
            <style>
                #header {
                    text-align: center;
                }

                @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
                @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

                input {
                    margin: 5px;
                }

                body {
                    margin: 0;
                    font-family: Arial, Helvetica, sans-serif;
                }

                .topnav {
                    overflow: hidden;
                    background-color: #333;
                }

                .topnav {
                    overflow: hidden;
                    background-color: #333;
                }

                .topnav a {
                    float: left;
                    color: #f2f2f2;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                }

                .topnav a:hover {
                    background-color: #ddd;
                    color: black;
                }

                .topnav a.active {
                    background-color: blue;
                    color: white;
                }

                .body {
                    position: static;
                    overflow-y: scroll;
                    width: 100%;
                    top: -20px;
                    left: -20px;
                    right: -40px;
                    bottom: -40px;
                    width: auto;
                    height: auto;
                    background-size: cover;
                    background-image: url(1.jpg);
                }

                .header {
                    position: absolute;
                    top: calc(50% - 35px);
                    left: calc(50% - 255px);

                }

                .header div {
                    float: left;
                    color: #fff;
                    font-family: 'Exo', sans-serif;
                    font-size: 40px;
                    font-weight: 200;
                }

                .header div span {
                    color: blue !important;
                }

                .login {
                    position: absolute;
                    top: calc(50% - 75px);
                    left: calc(50% - 50px);
                    height: 150px;
                    width: 260px;
                    padding: 10px;

                }

                .login input[type=text] {
                    width: 250px;
                    height: 30px;
                    border: 1px solid rgba(255, 255, 255, 0.6);
                    border-radius: 2px;
                    color: white;
                    background-color: #333;
                    font-family: 'Exo', sans-serif;
                    font-size: 16px;
                    font-weight: 400;
                    padding: 4px;
                }

                .login input[type=password] {
                    width: 250px;
                    height: 30px;
                    border: 1px solid rgba(255, 255, 255, 0.6);
                    border-radius: 2px;
                    color: white;
                    background-color: #333;
                    font-family: 'Exo', sans-serif;
                    font-size: 16px;
                    font-weight: 400;
                    padding: 4px;
                    margin-top: 10px;
                }

                .login input[type=button] {
                    width: 260px;
                    height: 35px;
                    background: blue;
                    border: 1px solid blue;
                    cursor: pointer;
                    border-radius: 2px;
                    color: #a18d6c;
                    font-family: 'Exo', sans-serif;
                    font-size: 16px;
                    font-weight: 400;
                    padding: 6px;
                    margin-top: 10px;
                }

                .login input[type=button]:hover {
                    opacity: 0.8;
                }

                .login input[type=button]:active {
                    opacity: 0.6;
                }

                .login input[type=text]:focus {
                    outline: none;
                    border: 1px solid rgba(255, 255, 255, 0.9);
                }

                .login input[type=password]:focus {
                    outline: none;
                    border: 1px solid rgba(255, 255, 255, 0.9);
                }

                .login input[type=button]:focus {
                    outline: none;
                }

                ::-webkit-input-placeholder {
                    color: rgba(255, 255, 255, 0.6);
                }

                ::-moz-input-placeholder {
                    color: rgba(255, 255, 255, 0.6);
                }
        </style>
    </head>

    <?php require_once('connection.php'); ?>

    <div class="topnav">
        <a class="active" href="Home.php">Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="Login.php">Log In</a>
    </div>

        <h1 id="header" style="color: white;">
            Create an account
        </h1>

        <div class="body">

        </div>

        <div class="grad">

        </div>

        <div class="header">

        </div>
        <br>

        <form name="login">

            <div class="login" id="logger">
                <input type="text" placeholder="Username" name="userid"><br>
                <input type="text" placeholder="Email Address" name="userid"><br>
                <input type="password" placeholder="Password again" name="pswrd"><br>
                <input type="password" placeholder="Password" name="pswrd"><br>
                <input type="button" onclick="check(this.form)" value="Login" />
            </div>

        </form>
    </body>

</html>