
<!-- database section  -->

<?php
##CREATE DATAbase blooddonation
##Table donors 
#INSERT from the form 
session_start();

#Database Connection 
// include("conn.php");
$conn = mysqli_connect("localhost","root","","hospital");


if (isset($_POST["save"])) {

$full_name = $_POST['full_name'];
$contact_number = $_POST['contact_number'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$donation_date = $_POST['donation_date'];
$address = $_POST['address'];
$medical_history = $_POST['medical_history'];
$description = $_POST['additional_description'];




// inserting data to the table
$sql = "INSERT INTO donors ( full_name, contact_number, blood_group, age, gender, donation_date, address, medical_history, description)
VALUES ('$full_name', '$contact_number', '$blood_group', '$age', '$gender', '$donation_date', '$address', '$medical_history', '$description ')";

$result = mysqli_query($conn, $sql);
 if($result){

    $_SESSION['status'] = "data inserted successefully";
 }
 else{
    $_SESSION['status'] = "data not inserted successefully";
  
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
    <title>Blood Donation Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<!--  -->
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
<!--  -->

        <!-- card 1 -->
        <div class="card">
            <div class="card-header">
               <h3>add donation Registration</h3>
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
    <label for="contact number">contact number </label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="number" class="form-control" placeholder="entercontact number" name="contact_number">
    </div>
</div>

<!--  -->


<div class="col-md-4">
    <label for="blood type">blood group</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-droplet"></i></span>
       <select id="blood type" class="form-select" name="blood_group">
        <option>A+</option>
        <option>B+</option>
        <option>C+</option>
        <option>AB</option>
       </select>
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="age">age</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
        <input type="number" class="form-control" placeholder="enter age" name="age">
    </div>
</div>


<!--  -->

<div class="col-md-4">
    <label for="gender">gender</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
       <select id="gender" class="form-select" name="gender">
        <option>male</option>
        <option>female</option>
       </select>
    </div>
</div>

<!--  -->



<div class="col-md-4">
    <label for="donation date">donation date</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
        <input type="date" class="form-control" name="donation_date">
    </div>
</div>


<!--  -->

<div class="col-md-4">
    <label for="address">address</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
        <input type="text" class="form-control" placeholder="enter address" name="address">
    </div>
</div>


<!--  -->
<div class="col-md-4">
<div class="form-group">
    <label for="medical history">medical history</label> 
    <div class="input-group">
        <span class="input-group-text"></span>
    <textarea id="message" name="message" rows="3" class="form-control" placeholder="enter medical history" name="medical_history"></textarea>
</div>
</div>
</div>

<!--  -->


<div class="col-md-4">
    <div class="form-group">
        <label for="additional description">additional description</label> 
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
        <textarea id="message" rows="3" class="form-control" placeholder="enter additional description " name="additional_description"></textarea>
    </div>
    </div>
    </div>

<!--buttons  -->

<div class="row g-3 mb-4">
    <div class="col-md-3">
        <button type="submit" class="btn btn-success w-100" name="save">save <i class="fas fa-pen"></i></button>
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-warning w-100">update <i class="fas fa-trash"></i></button>
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-danger w-100">delete <i class="fas fa-save"></i></button>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-info w-100">Search <i class="fas fa-search"></i></button>
    </div>
</div>




          <!--card 2  -->
          <div class="card">
            <div class="card-header">
            <h3>list of somali blood donors</h3>
            </div>
            <div class="card-body">
                <!-- table -->
                <table class="table">
                    <thead>
                      <tr>
                        
                        <th scope="col">name</th>
                        <th scope="col">contact </th>
                        <th scope="col">blood group</th>
                        <th scope="col">age </th>
                        <th scope="col">gender </th>
                        <th scope="col">donation date</th>
                        <th scope="col">address </th>
                        <th scope="col">medical history </th>
                        <th scope="col">additional description</th>
                      </tr>
                    </thead>
                    <tbody>
                      

                    <?php

$sql = "SELECT * FROM donors";
$result =mysqli_query($conn, $sql);
if ($result) {
 while($row= mysqli_fetch_assoc($result)){
$full_name=$row['full_name'];
$contact_number=$row['contact_number'];
$blood_group=$row['blood_group'];
$age=$row['age'];
$gender=$row['gender'];
$donation_date=$row['donation_date'];
$address=$row['address'];
$medical_history=$row['medical_history'];
$additional_description=$row['additional_description'];


echo ' <tr>
          
            <td>'.$full_name.'</td>
            <td>'.$contact_number.'</td>
            <td>'.$blood_group.'</td>
            <td>'.$age.'</td>
            <td>'.$gender.'</td>
             <td>'.$donation_date.'</td>
            <td>'.$address.'</td>
            <td>'.$medical_history.'</td>
            <td>'.$additional_description.'</td>
          </tr>';
 }
}
?>


                    </tbody>
                  </table>
            </div>
            </div>

</form>
</div>
</div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
