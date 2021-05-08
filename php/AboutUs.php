<html>
    <head>  
    <title style="font-family: 'Times New Roman', Times, serif;">
        Gymmer
    </title>
        <?php require_once('header.php'); ?>
    <style>
        #header1 {
            text-align: center
        }

        #para1 {
            text-align: center
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
    </style>

</head>
<?php require_once('connection.php'); ?>
<body>
    <div class="topnav">
        <a class="active" href="Home.php">Home</a>
        <a href="AboutUs.php">About Us</a>
        <a href="login.php">Log In</a>
    </div>

    <h1 id="header1">
        About Us
    </h1>
    <h2>
        What are we?
    </h2>
    <p style="font-family: 'Times New Roman', Times, serif;">
        We are Gymmers, a software used throughout a series of different gyms,
    </p>

    <h2>
        Who are our suppliers?
    </h2>
    <p style="font-family: 'Times New Roman', Times, serif;">
        Since Gymmer is just a software that will be used throughout multiple gyms.
        We will only be using AWS to provide us a method for storying such large
        quantities of information. We will also need to utilize, IntelliJ IDEA Ultimate,
        to further advance such algorithms and databases. We will also be using a
        professional tool to further organize the build-up of the database.
    </p>

    <h2>
        How does Gymmers manager your employees?
    </h2>
    <p style="font-family: 'Times New Roman', Times, serif;">
        Each employee will be required to provide SSN for W- 2 purposes, a rate, clock-in/out,
        TotalHours, username, and a password. The rate refers to how much they will be getting
        paid by the hour Clock-in/out will provide the database of how long they have been
        working in every week and will be saved as the TotalHours worked every two weeks. Upon
        the start of the next bi-weekly term, the totalHours will reset back to zero indicating
        that the employee has been paid. A password and username will be given to log into the
        application in order to check in/out or modify customer account information. An Employee
        must have a sales manager which manages the Total sales and will have the ability to
        freeze a customer’s membership. An employee must have an Operational Manager, which has
        the ability to cancel customer accounts and confront complaints. An employee must have a
        Training Manager which can reschedule workouts or log training sales. There must be one
        manager of each type for each location and multiple locations in each district. Each
        district will consist of three VPs, one in which oversees membership sales, personal
        training/ training sales, and one that oversees the operations of the gym itself. Each
        VP will have the ability to terminate an employee of they choose to do so. Each district
        will have one district manager that will oversee the work ethics of all VPs in each
        district; the managers and the VPs will have access to supply levels and damaged machine
        statistics as well as the number of members that are in the building. Finally, the
        district manager will also have the power to terminate employees as well.
    </p>

    <h2>
        How does Gymmer track manage your memebers?
    </h2>
    <p style="font-family: 'Times New Roman', Times, serif;">
        Each customer will create an account with a username and password. Whenever they check
        into a gym, the database will store the number of times they have used that specific gym.
        A customer must have a record of two things, their payment and their gym plan. The
        payment will store important documentation regarding the credit card on file, when their
        payment date is due, their payment history, and their payment amount. The second record
        would be their plans, in which they either have a yearly or monthly plan and single person
        or multi-person access plan. They are also granted the ability to travel to multiple gyms
        and each gym location they travel to must contain the address, the total of employees
        currently working there and the current regulations. Each customer will be permitted to
        request a freeze, cancellation, and training rescheduling; however, accounts must be
        frozen by sales managers, complaints and cancellations must be fulfilled by operational
        mangers, and rescheduling must be fulfilled by training managers
    </p>

    <h2>
        How does Gymmers track your gym Locations?
    </h2>
    <p style="font-family: 'Times New Roman', Times, serif;">
        Each Gym location will be separated by districts. Each district will have their specific
        locations that will record the address, employees, members, high risk personnel, supplies,
        broken machines and regulations. However, each location must contain one Operational,
        Training, and Sales managers. Each district must have three VPs that oversees all
        operations, training, and sales in every gym location in that specific district. Each VP
        will have a district manager that will oversee the work ethics for all VPs.
    </p>

    <br>
    <br>
    <img src="ERD.jpg" alt="Italian Trulli" class="center">

</body>

</html>