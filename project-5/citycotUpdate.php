<?php

include("conn.php");
// i used sesseion to get alert massage 
session_start();   
// update database
$asset_ID=$_GET['asset_ID'];
$sql ="SELECT * FROM `asset_reg` WHERE  asset_ID=$asset_ID";
$result =mysqli_query($conn, $sql);
if ($result) 

// variables that take information to the database
$row= mysqli_fetch_assoc($result);
$asset_ID=$row['asset_ID']; 
$Asset_Name=$row['Asset_Name'];
$Category=$row['Category'];
$Purchased_Date=$row['Purchased_Date'];
$Location=$row['Location'];
$asset_Condition=$row['asset_Condition'];  
$Assigned_To=$row['Assigned_To'];
$Notes=$row['Notes'];




if (isset($_POST["save"])) {

    $Asset_Name = $_POST["Asset_Name"];
    $Category = $_POST["Category"];
    $Purchased_Date = $_POST["Purchased_Date"];
    $Location = $_POST["Location"];
    $asset_Condition = $_POST["asset_Condition"];
    $Assigned_To = $_POST["Assigned_To"];
    $Notes = $_POST["Notes"];


$sql ="UPDATE `asset_reg` SET asset_ID=$asset_ID, Asset_Name='$Asset_Name', 
 Category='$Category', Purchased_Date='$Purchased_Date', Location='$Location', 
asset_Condition='$asset_Condition', Assigned_To='$Assigned_To',
Notes='$Notes' WHERE asset_ID=$asset_ID";

$result = mysqli_query($conn, $sql);

if($result){

   $_SESSION['status'] = "data inserted successefully";
// echo "date saved";
}
else{

   $_SESSION['status'] = "data not inserted successefully";
//    echo "errro" . mysqli_error($conn);
}

}




?>
<!-- html section  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="citycot.css">
   
</head>
<body>
    <!-- heder -->
    <header>
    <h1>asset registration</h1>
</header>

<!--  flash / alert massage  -->

<?php

if(isset($_SESSION['status'])) {
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
  
    unset($_SESSION['status']);
}
?>



<!-- form section -->
<div class="container"   >
    <h1>Registration</h1>
    <div class="form-container">
    <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Asset_name">Asset_name</label>
                    <input type="text" class="form-control" placeholder="enter asset_name " name="Asset_Name" value=<?php  echo $Asset_Name;?>>
                </div>
                <div class="form-group col-md-6">
                    <label for="Category">Category</label>
                    <input type="text" class="form-control" placeholder="enter Category " name="Category" value=<?php  echo $Category;?>>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Purchased_Date">Purchased Date</label>
                    <input type="date" class="form-control" name="Purchased_Date"  value=<?php  echo $Purchased_Date;?>>
                </div>
                <div class="form-group col-md-6">
                    <label for="Location">Location</label>
                    <select class="form-control" name="Location"   value=<?php  echo $Location;?>>
                        <option value="Main Campus">Main Campus</option>
                        <option value="Nakhill Campus">Nakhill Campus</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="asset_Condition">asset_Condition</label>
                    <select class="form-control" name="asset_Condition"   value=<?php  echo $asset_Condition;?>>
                        <option value=" Working"> Working</option>
                        <option value=" Scrap">Scrap </option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="Assigned_To"> Assigned_To</label>
                    <input type="text" class="form-control" placeholder="Assigned_To " name="Assigned_To"  value=<?php  echo $Assigned_To;?>>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Notes">Notes</label>
                    <textarea class="form-control" name="Notes" placeholder="enter Notes"><?php echo $Notes;?></textarea>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" name="save" value="save" class="btn btn-primary btn-block">save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- section 2  -->
<!-- table -->

<h1 class="fs-3 text-center">table</h1>
<div class="container" id="container1">

<table class="table table-">
  <thead>
    <tr> <th scope="col">#</th>
        <th scope="col">Asset_name</th>
            <th scope="col">Category</th>
            <th scope="col">Purchased_Date</th>
            <th scope="col">Location</th>
            <th scope="col">asset_Condition</th>
            <th scope="col">Assigned_To</th>
            <th scope="col">Notes</th>
            <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <!-- php section  -->
    <?php
  $sql = "SELECT * FROM asset_reg";
$result =mysqli_query($conn, $sql);
if ($result) {


while($row= mysqli_fetch_assoc($result)){
    $asset_ID=$row['asset_ID']; 
$Asset_Name=$row['Asset_Name'];
$Category=$row['Category'];
$Purchased_Date=$row['Purchased_Date'];
$Location=$row['Location'];
$asset_Condition=$row['asset_Condition'];
$Assigned_To=$row['Assigned_To'];
$Notes=$row['Notes'];

echo ' <tr>
            <td>'.$asset_ID.'</td>
            <td>'.$Asset_Name.'</td>
            <td>'.$Category.'</td>
            <td>'.$Purchased_Date.'</td>
            <td>'.$Location.'</td>
            <td>'.$asset_Condition.'</td>
            <td>'.$Assigned_To.'</td>
            <td>'.$Notes.'</td>
          <td>
            <button class="btn btn-success"> <a href="citycotUpdate.php? asset_ID='.$asset_ID.'"class="text-light" >update</a></button>
            <button class="btn btn-danger "> <a href="citycotDelete.php? asset_ID='.$asset_ID.'" class="text-light">delete</a></button>
            </td>
            </tr>';
}
}
?>

  </tbody>
</table>
</div>




















<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>