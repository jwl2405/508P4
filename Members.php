<html>
<?php require_once('connection.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>
        Accounts Page
    </title>
    
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
        <button type="submit" id="SignOut"> <a href="RegisterScreen.php">Sign out </a></button>  

    </div>
      
    <div class="container-fluid mt-3 mb-3">
	<h4>Restaurants</h4>
	<div class="table-responsive">
		<table id="table-rest" name="table-rest" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Location</th>
					<th>Phone Number</th>
					<th>Rating</th>
                    <th>Posted By</th>
				</tr>
			</thead>
		</table>
	</div>
</div>


<fieldset>
    <legend>
    Add Members
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
        First Name
    </label>
    <br>
    <input type="text" placeholder="First Name" name="nameF" id="nameF"><br>
    <br><label>
        Last Name
    </label>
    <br>
    <input type="text" placeholder="Last Name" name="nameL" id="nameL"><br>
    <br><label>
        Password
    </label>
    <br>
    <input type="password" placeholder="Password" name="password" id="password"><br>
    <br>
    <button type="submit" id="addMember"> Create </button>  

</fieldset>

</body>

    <body 
        oncontextmenu="return false">
    </body>

</html>