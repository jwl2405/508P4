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
        <a href="SignOut.php">Sign Out</a>

    </div>
      
      <TABLE BORDER="5"    WIDTH="50%"   CELLPADDING="4" CELLSPACING="3">
   <TR>
      <TH COLSPAN="6"><BR><H3><BR>Members</H3>

      </TH>
   </TR>
   <TR>
   <TH>First Name</TH>
      <TH>Last Name</TH>
      <TH>Username</TH>
      <TH>Email Address</TH>
      <TH>ID</TH>
      <TH>Password</TH>
   </TR>
   <TR ALIGN="CENTER">
       <TD>Data 1</TD>
      <TD>Data 2</TD>
      <TD>Data 3</TD>
      <TD>Data 4</TD>
      <TD>Data 5</TD>
      <TD>Data 6</TD>
   </TR>
</TABLE>

</body>

    <body 
        oncontextmenu="return false">
    </body>

</html>