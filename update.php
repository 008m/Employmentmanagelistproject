
<?php include("connection.php"); 
$id= $_GET['id'];

$query = "SELECT * FROM FORM where id='$id'";
$data = mysqli_query($conn, $query);

$total= mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
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
        <div class="title">Update page
        </div>
        <div class="form">
           <div class="input_field">
              <label for="First Name">First Name</label>
              <input type="text" class="input" name="firstname" value="<?php echo $result["firstname"];?>" required>
            </div>
           <div class="input_field">
              <label for="Last Name">Last Name</label>
              <input type="text" class="input" name="lastname" value="<?php echo $result["lastname"];?>" required>

            </div>
            <div class="input_field">
              <label for="email">Email</label>
              <input type="text" class="input" name="email" value="<?php echo $result["email"];?>" required>

            </div>
        
            <div class="input_field">
              <label for="Phone Number">Phone Number</label>
              <input type="text" class="input" name="phone" value="<?php echo $result["phone"];?>" required>

            </div>
            <div class="input_field">
              <label for="Address">Address</label>
              <textarea class="textarea"  name="address"  required> <?php echo $result["address"];?></textarea>

            </div>
            <div class="input_field">
              <label for="">Gender</label>
              <input type="radio" name="gender" value="male" <?php 
                                                                 if($result["gender"] =='male')
                                                                 {
                                                                  echo "male";
                                                                 }
                                                                 ?>
              >Male
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
                <input type="submit" value="update details" name="update">

            </div>

        </div>
     
       
     


        </form>
    </div>
</body>
</html>


<?php
  if($_POST['update'])
  {
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $add= $_POST['address'];
    $gender= $_POST['gender'];
    $hobby= $_POST['hobby'];
    $date= $_POST['trip_start'];

    
    $query = "UPDATE form set firstname='$fname',lastname='$lname',email='$email',phone='$phone',address='$add',gender='$gender',hobby='$hobby',startdate='$date' WHERE id='$id'";
    $data = mysqli_query($conn,$query);

    if($data)
    {
      echo "<script>alert('Record Update')</script>";
      ?>
         <meta http-equiv = "refresh" content="0; url=http://localhost/Task/display.php"/>
      <?php
    }
    else
    {
      echo "Failed to update";
    }
  
  

  

  }

?>