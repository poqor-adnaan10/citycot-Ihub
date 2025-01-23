




<?php



#Database Connection 
include("conn.php");

if (isset($_POST["save"])) {

$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$current_address = $_POST['current_address'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$contact_number = $_POST['contact_number'];
$profile_photo = $_POST['profile_photo'];
$height = $_POST['height'];
$blood_group = $_POST['blood_group'];
$pulse = $_POST['pulse'];
$allergy = $_POST['allergy'];
$weight = $_POST['weight'];
$blood_prussure = $_POST['blood_prussure'];
$respiration = $_POST['respiration'];
$diet = $_POST['diet'];
$additional_info = $_POST['additional_info'];





##Inesrting data to the table 
$sql = "INSERT INTO patient (full_name, gender, email, current_address, last_name, age, contact_number, height, blood_group, pulse, allergy, weight, blood_prussure, respiration, diet, additional_info)
VALUES ('$full_name', '$gender', '$email', '$current_address', '$last_name', '$age', '$contact_number', '$height', '$blood_group', '$pulse', '$allergy', '$weight', '$blood_prussure', '$respiration', '$diet', '$additional_info')";

$result = mysqli_query($conn,$sql);

if($result) {
    echo "Record saved";
}
else {
    echo "Not inserted " .mysqli_error($conn);
}
}


?>

















<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="card">
    <div class="card-header">
     <h3>patient basic form</h3>
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
    <label for="email">email</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
        <input type="email" class="form-control" placeholder="enter email" name="email">
    </div>
</div>

<!--  -->


<div class="col-md-4">
    <label for="current address">current address</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-house"></i></span>
        <input type="number" class="form-control" placeholder="enter current address" name="current_address">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="last name">last name</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control" placeholder="enter last Name" name="last_name">
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
    <label for="contact number">contact number </label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
        <input type="number" class="form-control" placeholder="entercontact number" name="contact_number">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="profile photo"> profile photo</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-camera"></i></span>
        <input type="file" class="form-control" name="profile_photo">
    </div>
</div>

<!--  -->
<div class="col-md-4">
    <label for="height">height</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-ruler"></i></span>
        <input type="number" class="form-control" placeholder="enter height" name="height">
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
    <label for="pulse">  pulse</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-heart-pulse"></i></span>
        <input type="number" class="form-control" placeholder="enter pulse rate" name="pulse">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="allergy"> allergy</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-hand"></i></span>
        <input type="text" class="form-control" placeholder="enter allergy details" name="allergy">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="weight"> weight</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-weight-scale"></i></span>
        <input type="text" class="form-control" placeholder="enter weight" name="weight">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="blood prussure">blood prussure</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-weight-scale"></i></span>
        <input type="text" class="form-control" placeholder="enter blood prussure" name="blood_prussure">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="respiration">respiration</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-lungs"></i></span>
        <input type="text" class="form-control" placeholder="enter respiration rate" name="respiration">
    </div>
</div>

<!--  -->

<div class="col-md-4">
    <label for="diet">diet</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-utensils"></i></span>
       <select id="diet" class="form-select" name="diet">
        <option>vegetarian</option>
        <option>no sugar</option>
        <option>low carb</option>
       </select>
    </div>
</div>

<!--  -->


<div class="col-md-4">
    <label for="additional info">additional info</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-exclamation"></i></span>
      <textarea class="form-control" placeholder="enter info" name="additional_info"></textarea>
    </div>
</div>

   <!--buttons  -->

   <div class="row g-3 mb-4">
    <div class="col-md-3">
        <button type="submit" class="btn btn-success w-100" name="save" value="save">save <i class="fas fa-pen"></i></button>
        
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

         </form>
     </div>

</div>
</body>

</html>
