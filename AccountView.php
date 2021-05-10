<html>
<?php require_once('connection.php'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>
        Accounts Page
    </title>

            <!-- JS libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>

        <!-- My JS libraries -->
        <script src="AccountImport.js"></script>

    <style>
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

<body>
    <div class="topnav">    
        <a class="active" href="AccountView.php">Account View</a>
        <a href="Members.php">Members</a>
        <a href="Employees.php">Employees</a>
        <button style="background-color: black;" type="submit" id="SignOut"> <a href="Home.php">Sign out </a></button>  
    </div>

    <div class="table-responsive">
		<table id="table-member" name="table-member" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Password</th>
					<th>Username</th>
				</tr>
			</thead>
		</table>
	</div>

<fieldset>
    <legend>
        Change account specifications
    </legend>

    <label>
        Username
    </label>
    <br>
    <input type="text" placeholder="Username" name="username" id="username"><br>
    <br><label>
        Email
    </label>
    <br>
    <input type="email" placeholder="Email Address" name="email" id="email"><br>
    <br><label>
        Password
    </label>
    <br>
    <input type="password" placeholder="Password" name="password" id="password"><br>
    <br>
    <button type="submit" id="addMember"> Create </button>  

</fieldset>

</body>

</html>

<script src="Add.js"></script>
