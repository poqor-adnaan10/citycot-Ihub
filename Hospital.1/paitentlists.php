<?php




include("conn.php");



?>





<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</head>

<body>


    <div class="card">
      <div class="card-header">
        <h3>patient list</h3>
      </div>

      <div class="card-body">
        
               <!-- table -->
        <table class="table table-bordered border-dark table-hover">
                <thead class="table-light">
                  <tr>

                    <th scope="col">full_name  </th>
                    <th scope="col">gender </th>
                    <th scope="col">email</th>
                    <th scope="col">current_address</th>
                    <th scope="col">last_name</th>
                    <th scope="col">age</th>
                    <th scope="col">contact_number</th>
                    <th scope="col">height</th>
                    <th scope="col">blood_group</th>
                    <th scope="col">pulse</th>
                    <th scope="col">allergy</th>
                    <th scope="col">weight</th>
                    <th scope="col">blood_prussure</th>
                    <th scope="col">respiration</th>
                    <th scope="col">diet</th>
                    <th scope="col">additional_info</th>
                  </tr>
                </thead>
                <tbody>
                <?php

$sql = "SELECT * FROM paitent";
$result =mysqli_query($conn, $sql);
if ($result) {
while($row= mysqli_fetch_assoc($result)){
$full_name=$row['full_name'];
$gender=$row['gender'];
$email=$row['email'];
$current_address=$row['current_address'];
$last_name=$row['last_name'];
$age=$row['age'];
$contact_number=$row['contact_number'];
$height=$row['height'];
$blood_group=$row['blood_group'];
$pulse=$row['pulse'];
$allergy=$row['allergy'];
$weight=$row['weight'];
$blood_prussure=$row['blood_prussure'];
$respiration=$row['respiration'];
$diet=$row['diet'];
$additional_info=$row['additional_info'];


echo ' <tr>
            <td>'.$full_name.'</td>
            <td>'.$gender.'</td>
            <td>'.$email.'</td>
            <td>'.$current_address.'</td>
            <td>'.$last_name.'</td>
            <td>'.$age.'</td>
            <td>'.$contact_number.'</td>
            <td>'.$height.'</td>
            <td>'.$blood_group.'</td>
            <td>'.$pulse.'</td>
            <td>'.$allergy.'</td>
            <td>'.$weight.'</td>
            <td>'.$blood_prussure.'</td>
            <td>'.$respiration.'</td>
            <td>'.$diet.'</td>
            <td>'.$additional_info.'</td>
            <td>'.$fees.'</td>
            <td>'.$fees.'</td>
          
          </tr>';
 }
}
?>

                </tbody>
              </table>
      </div>
    </div>

</body>
</html>
