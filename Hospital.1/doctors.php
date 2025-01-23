
<?php
session_start();
include("conn.php");


if (isset($_POST["Save"])) {

$name = $_POST["full_name"];
$email = $_POST["email"];
$title = $_POST["title"];
$departmant = $_POST["departmant"];
$experince = $_POST["experince"];
$contact_number = $_POST["contact_number"];
$degree = $_POST["degree"];
$fees = $_POST["fees"];



$sql = "INSERT INTO doctors (full_name, email, title, departmant, experince, contact_number, degree, fees)
VALUES('$name', '$email', '$title', '$departmant', '$experince',  '$contact_number', '$degree', '$fees' )";


 $result = mysqli_query($conn, $sql);

 if($result){

    $_SESSION['status'] = "data inserted successefully";
// echo "date saved";
 }
 else{

    $_SESSION['status'] = "data not inserted successefully";
    // echo "errro" . mysqli_error($conn);
 }

}
?>



<!-- html section -->


<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


<?php

if(isset($_SESSION['status'])) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>!congratulations</strong> <?php     echo $_SESSION['status'];   ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
  
    unset($_SESSION['status']);
}
?>





<!-- card 1 -->
<!-- Doctor Registration Form -->

      <div class="card">
        <div class="card-header">
           <h3>add doctors</h3>
        </div>
          <div class="card-body">
           <form action="#" method="POST">
         <div class="row g-3 mb-4">
<!--  -->
            <div class="col-md-4">
                <label for="Full Name">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="enter full name" name="full_name">
                </div>
            </div>
        

<!--  -->
            <div class="col-md-4">
                <label for="email">email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="enter email" name="email">
                </div>
            </div>


<!--  -->
            <div class="col-md-4">
                <label for="title">title</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-suitcase"></i></span>
                    <input type="text" class="form-control" placeholder="enter title" name="title">
                </div>
            </div>

<!--  -->
            <div class="col-md-4">
                <label for="departmant">departmant</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                   <select id="departmant" class="form-select" name="departmant">
                    <option value="cardiology">cardiology</option>
                    <option value="neurology">neurology</option>
                    <option value="orthopedics">orthopedics</option>
                   </select>
                 </div>
            </div>

<!--  -->
            <div class="col-md-4">
                <label for="experince">experince</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-suitcase"></i></span>
                    <input type="text" class="form-control" placeholder="enter experince years" name="experince">
                </div>
            </div>

<!--  -->
<div class="col-md-4">
    <label for="contact number">contact number</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="number" class="form-control" placeholder="enter contact number" name="contact_number">
    </div>
</div>

<!--  -->
<div class="col-md-4">
    <label for="edegre">degree</label>
    <div class="input-group">
        <span class="input-group-text"></span>
        <input type="text" class="form-control" placeholder="enter degre" name="degree">
    </div>
</div>

<!--  -->
<div class="col-md-4">
    <label for="fees">fees</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
        <input type="text" class="form-control" placeholder="enter fess" name="fees">
    </div>
</div>

<!--  -->
<div class="col-md-4">
    <label for="title"> profile photo</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-camera"></i></span>
        <input type="file" class="form-control" name="photo">
    </div>
</div>


                <!--buttons  -->

                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-danger w-100">delete <i class="fas fa-save"name="delete" ></i></button>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-warning w-100">update <i class="fas fa-trash" name="update"></i></button>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-success w-100" name="Save" value="Save">Save <i class="fas fa-pen" ></i></button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-info w-100">Search <i class="fas fa-search" name="Search"></i></button>
                    </div>
                </div>

         </div>
           </form>
          </div>

      </div>   

            <!--card 2  -->
<div class="card">
<div class="card-header">
<h3>list of doctors</h3>
</div>
<div class="card-body">
    <!-- table --> 









    <table class="table">
        <thead>
          <tr>
            
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">title</th>
            <th scope="col">departmant</th>
            <th scope="col">experiance</th>
            <th scope="col">contact</th>
            <th scope="col">degree</th>
            <th scope="col">fees</th>
          </tr>
        </thead>
        <tbody>
<!-- table  -->
<?php

$sql = "SELECT * FROM doctors";
$result =mysqli_query($conn, $sql);
if ($result) {

// if (!$result) {
//     die("Query failed: " . mysqli_error($conn)); // Error handling
// }

while($row= mysqli_fetch_assoc($result)){
$full_name=$row['full_name'];
$email=$row['email'];
$title=$row['title'];
$departmant=$row['departmant'];
$experince=$row['experince'];
$contact_number=$row['contact_number'];
$degree=$row['degree'];
$fees=$row['fees'];

echo ' <tr>
            <td>'.$full_name.'</td>
            <td>'.$email.'</td>
            <td>'.$title.'</td>
            <td>'.$departmant.'</td>
            <td>'.$experince.'</td>
            <td>'.$contact_number.'</td>
            <td>'.$degree.'</td>
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






