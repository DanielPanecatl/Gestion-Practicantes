<?php
// include Database connection file
include ('../db/conexion.php');
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $proyect_id = $_POST['id'];

    // Get User Details
    $query = "SELECT * FROM proyecto WHERE id = '$proyect_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    $response = array();
    if(mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}
?>