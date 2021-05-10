
<?php
require_once ('connection.php');

class user
{
    public function listEmployees()
    {
        global $conn;
        
        $sqlQuery = "SELECT id AS 'id', email AS 'email', password AS 'password', username AS 'username'
        FROM user";
        
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
    $employee->listEmployees();

?>