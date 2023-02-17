<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>form</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <div class="title">Form page
        </div>
        <div class="form">
           <div class="input_field">
              <label for="First Name">First Name</label>
              <input type="text" class="input" name="firstname" required>
            </div>
           <div class="input_field">
              <label for="Last Name">Last Name</label>
              <input type="text" class="input" name="lastname" required>

            </div>
            <div class="input_field">
              <label for="email">Email</label>
              <input type="text" class="input" name="email" required>

            </div>
        
            <div class="input_field">
              <label for="Phone Number">Phone Number</label>
              <input type="text" class="input" name="phone" required>

            </div>
            <div class="input_field">
              <label for="Address">Address</label>
              <textarea class="textarea"  name="address" required></textarea>

            </div>
            <div class="input_field">
              <label for="">Gender</label>
              <input type="radio" name="gender" value="male">Male
              <input type="radio" name="gender" value="Female">Female

            </div>
            <div class="input_field">
              <label for="Hobby">Hobby</label>
              <input type="checkbox" name="hobby" value="cricket">cricket
              <input type="checkbox" name="hobby" value="study">study

            </div>
            <div class="input_field">
              <label for="img">select image</label>
              <input type="File" name="img" accept="image/*">

            </div>
            <div class="input_field">
              <label for="start">start date</label>
              <input type="date" name="trip_start" value="2023-02-15" min="1947-02-15" max="2050-12-31">

            </div>
            <div class="input_field">
                <input type="submit" value="register" name="register">

            </div>

        </div>
     
       
     


        </form>
    </div>
</body>
</html>


<?php
  if($_POST['register'])
  {
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $add= $_POST['address'];
    $gender= $_POST['gender'];
    $hobby= $_POST['hobby'];
    $date= $_POST['trip_start'];

    $query = "INSERT INTO form (firstname,lastname,email,phone,address,gender,hobby,startdate) values('$fname','$lname','$email','$phone','$add','$gender','$hobby','$date')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
      echo "Data Inserted into Database";
    }
    else
    {
      echo "Failed";
    }
  
  

  

  }

?>