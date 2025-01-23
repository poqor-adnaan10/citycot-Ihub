<!-- database sdection -->
<?php

// include("conn.php");
$conn = mysqli_connect("localhost","root","","hospital");

if (isset($_POST["save"])) {

$name = $_POST["full_name"];
$email = $_POST["email"];
$contact_number = $_POST["contact_number"];
$region = $_POST["region"];
$town = $_POST["town"];
$village = $_POST["village"];
$blood_type = $_POST["blood_type"];


$sql = "INSERT INTO reciever(full_name, email, contact_number  , region, town, village, blood_type)
         VALUES('$name', '$email', '$contact_number', '$region', '$town', '$village', '$blood_type')";


 $result = mysqli_query($conn, $sql);

 if($result){
echo "date saved";
 }
 else{
    echo "errro" . mysqli_error($conn);
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
    <title>Blood Request</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- card 1 -->

    <div class="card">
        <div class="card-header">
           <h3>blood request form</h3>
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
                    <label for="contact number">contact_number</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="number" class="form-control" placeholder="enter phone number" name="contact_number">
                    </div>
                </div>

<!--  -->

              <div class="col-md-4">
                  <label for="region">region</label>
                <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                        <input type="text" class="form-control" placeholder="enter region" name="region">
                  </div>
              </div>

<!--  -->

                  <div class="col-md-4">
                     <label for="town">town</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                        <input type="text" class="form-control" placeholder="enter town" name="town">
                     </div>
                  </div>

<!--  -->

                    <div class="col-md-4">
                        <label for="village">village</label>
                        <div class="input-group">
                          <span class="input-group-text"></span>
                          <input type="text" class="form-control" placeholder="enter village" name="village">
                        </div>
                    </div>

<!--  -->

<div class="col-md-4">
    <label for="blood type">blood type</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-droplet"></i></span>
       <select id="blood type" class="form-select" name="blood_type">
        <option>A+</option>
        <option>B+</option>
        <option>C+</option>
        <option>AB</option>
       </select>
    </div>
</div>


         <!--buttons  -->

         <div class="row g-3 mb-4">
            <div class="col-md-3">
            <button type="submit" class="btn btn-success w-100" name="save" value="save">save <i class="fas fa-pen"></i></button>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-danger w-100">delete <i class="fas fa-trash"></i></button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-warning w-100"> update<i class="fas fa-pen"></i></button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-info w-100">Search <i class="fas fa-search"></i></button>
            </div>
        </div>
           </form>

<!-- card 2 -->
<div class="card">
  <div class="card-header"> 
<h3>list of blood Request</h3>
  </div>
     <div class="card-body">
    
    <!-- table -->
        <table class="table table-striped ">
            <thead>
              <tr>
            
                <th scope="col">name </th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">region</th>
                <th scope="col">town</th>
                <th scope="col">village</th>
                <th scope="col">blood type</th>
                <th scope="col">status</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>

            <!-- table info section -->
 <?php

$sql = "SELECT * FROM reciever";
$result =mysqli_query($conn, $sql);
if ($result) {
 while($row= mysqli_fetch_assoc($result)){
$name=$row['full_name'];
$email=$row['email'];
$contact_number=$row['contact_number'];
$region=$row['region'];
$town=$row['town'];
$village=$row['village'];
$blood_type=$row['blood_type'];

echo ' <tr>
          
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$contact_number.'</td>
            <td>'.$region.'</td>
            <td>'.$town.'</td>
             <td>'.$village.'</td>
            <td>'.$blood_type.'</td>
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
