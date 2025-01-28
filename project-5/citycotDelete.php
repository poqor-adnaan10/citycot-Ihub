<?php
include("conn.php");
if(isset($_GET['asset_ID'])) {
    $asset_ID=$_GET['asset_ID'];

    $sql= "DELETE FROM `asset_reg` where asset_ID=$asset_ID";
    $result=mysqli_query($conn, $sql);
    if($result) {
        header('location:citycot.php');
        // echo "deleted sucssecc fully";
    }
    else {
        die(mysqli_error($conn));
    }
}


?>



