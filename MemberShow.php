
<?php
require_once ('connection.php');

class user
{
    public function listMember()
    {
        global $conn;
        $num = $_SESSION['user_ID'];
        $sqlQuery = "SELECT ID AS 'id', email AS 'email', password AS 'password', First_Name AS 'First name', Last_name AS 'Last name'
        FROM member";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->execute();
        
        $numberRows = $stmt->rowCount();
        
        $dataTable = array();
        
        while ($sqlRow = $stmt->fetch()) {
            $dataRow = array();
            
            $dataRow[] = $sqlRow['id'];
            $dataRow[] = $sqlRow['email'];
            $dataRow[] = $sqlRow['password'];
            $dataRow[] = $sqlRow['username'];
            $dataRow[] = $sqlRow['First name'];
            $dataRow[] = $sqlRow['Last name'];

            $dataTable[] = $dataRow;
        }
        
        $output = array(
            "recordsTotal" => $numberRows,
            "recordsFiltered" => $numberRows,
            "data" => $dataTable
        );
        
        echo json_encode($output);
    }
}

$employee = new user();
    $employee->listMember();

?>