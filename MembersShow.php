
<?php
require_once ('connection.php');

class User
{
    public function MembersShow()
    {
        global $conn;
        
        $sqlQuery = "SELECT h.First_name as 'First name', h.last_name as 'Last name', h.email as 'Email', h.username as 'Username', h.password as 'password'
        FROM members h join user u;

/*
        if (! empty($_POST["search"]["value"]))
         {
             $sqlQuery .= 'WHERE ( name LIKE "%' . $_POST["search"]["value"] . '%" OR type LIKE "%' . $_POST["search"]["value"] . '%" or rating LIKE "%' . $_POST["search"]["value"] . '%") ';
         }
*/
/*
if (! empty($_POST["order"])) {
    $sqlQuery .= 'ORDER BY ' . ($_POST['order']['0']['column'] + 1) . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $sqlQuery .= 'ORDER BY r.rest_name ASC ';
}
*/
    
        $stmt = $conn->prepare($sqlQuery);
        $stmt->execute();
        
        $numberRows = $stmt->rowCount();
        
        $dataTable = array();
        
        while ($sqlRow = $stmt->fetch()) {
            $dataRow = array();
            $dataRow[] = $sqlRow['name'];
            $dataRow[] = $sqlRow['type'];
            $dataRow[] = $sqlRow['location'];
            $dataRow[] = $sqlRow['phone'];
            $dataRow[] = $sqlRow['rating'];
            $dataRow[] = $sqlRow['posted by'];
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

$User = new User();
$User-> listGyms();


?>