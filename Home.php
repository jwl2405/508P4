<html>
<?php require_once('connection.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>
        Gymmer Home page
    </title>
    <style>

        
        #helper {
            text-align: center;
        }

        #title {
            text-align: center;
        }

        #para1 {
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Create three equal columns that floats next to each other */
        .subheader {
            float: center;
            width: 100%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /*centering the image*/
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

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

        .contact input[type=text] {
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
    </style>

<body>

    <div class="topnav">
        <a class="active" href="Home.php">Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="Login.php">Log In</a>
    </div>

    <!--Title and description of website-->
    <fieldset>
        <div class="header">
            <h1 id="title">
                Gymmer
            </h1>

            <p id="para1">
                A more efficient way to keep track of your gym
            </p>
        </div>
    </fieldset>
    <br>

    <!--Image for the website-->
    <img src="arcgis-online-overview-banner-foreground-people-presenting.png" alt="Italian Trulli" class="center">
    <br>

    <fieldset>
        <h3 style="text-align:center;">
            Questions about Gymmer?
        </h3>

        <p style="text-align:center;">
            <a href="#AskAway">Ask here!</a>

        </p>
    </fieldset>

    <!--Three columns for details on the software-->
    <fieldset style="background-color:  blue;">
        <div class="row">
            <div class="column">
                <h2 style="color: white;">
                    Register Customers
                </h2>

                <p style="color: white;">
                    Easily register two customers with our quick and easy tools
                </p>
            </div>

            <div class="column">
                <h2 style="color: white;">
                    Manage Members
                </h2>

                <p style="color: white;">
                    Easily Check in Members as simply as walking in
                </p>
            </div>

            <div class="column">
                <h2 style="color: white;">
                    Maintain Gyms
                </h2>

                <p style="color: white;">
                    Broken machines? Gymmer will notify the nearest technition to come in and fix it!
                </p>
            </div>
        </div>
    </fieldset>

    <!--Register-->
    <fieldset>
        <h3 style="text-align:center;">
            Interested in Gymmer?
        </h3>

        <p style="text-align:center;">
            <a href="RegisterScreen.php">Register Now!</a>
        </p>
    </fieldset>

    <!--image before contact and after register-->
    <fieldset>
        <img src="2.jpg" alt="Italian Trulli" class="center">
    </fieldset>


    <!--Used for contacting us-->
    <fieldset id="helper" style="background-color: #333;">
        <div class="contact" id="AskAway">

            <h2 style="color: #f2f2f2;">
                Let's talk about Gymmer
            </h2>
            <p style="color: gray;">
                Have questions about how Gymmer can empower your organization?
                <br>
                Let's talk about what Gymmer can do for you.
            </p>
            <br>

            <input type="text" placeholder="First name" nameF="userid"><br>
            <br>
            <br>

            <input type="text" placeholder="Last name" nameL="userid"><br>
            <br>
            <br>

            <input type="text" placeholder="Email Address" emailAddress="userid"><br>
            <br>
            <br>

            <input type="text" placeholder="Company" comp="userid"><br>
            <br>
            <br>

            <input type="text" placeholder="Job Title" jobTit="userid"><br>
            <br>
            <br>

            <input type="text" placeholder="Country/Region" name="userid"><br>
            <br>
            <br>

            <input type="text" placeholder="How can we help?" name="userid" rows = "20" cols="100"><br>
            <br>
            <br>
            <label>
                <input type="submit" value="Submit" />
            </label>
        </div>
    </fieldset>
</body>

</html>