
<?php
require_once ('connection.php');

class user
{
    public function listEmployees()
    {
        global $conn;
        
        $sqlQuery = "SELECT id AS 'ID', email AS 'Email', password AS 'Password', username AS 'Username'
        FROM user WHERE id = 3
        }";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->execute();
        
        $numberRows = $stmt->rowCount();
        
        $dataTable = array();
        
        while ($sqlRow = $stmt->fetch()) {
            $dataRow = array();
            
            $dataRow[] = $sqlRow['ID'];
            $dataRow[] = $sqlRow['Email'];
            $dataRow[] = $sqlRow['Password'];
            $dataRow[] = $sqlRow['Username'];
                        
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