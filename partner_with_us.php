<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $location = $_POST['location'];
  $category = $_POST['category'];
  $lab_id = $_POST['lab_id'];
  $description = $_POST['description'];

  $query = "INSERT INTO `company`(`name`, `email`, `location`, `category`, `lab_id`, `description`) VALUES ('$name','$email','$location','$category','$lab_id','$description')";
  $result = mysqli_query($conn, $query);
  if ($result) {
    echo "<script> alert('Your details has been recorded successfully')</script> ";
  } else {
    echo "<script> alert('something went wrong')</script> ";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Partner With Us </title>--->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="title">Partner With Us</div>
    
      <div class="content">
      <form action="" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Company Name</span>
              <input type="text" id="company_name" name="name" placeholder="Enter Company Name" required>
            </div>
            <div class="input-box">
              <span class="details">Company Email ID</span>
              <input type="text" id="company_email_id" name="email" placeholder="Enter Company Email" required>
            </div>
            <div class="input-box">
              <span class="details">Lab ID</span>
              <input type="text" id="lab_id" name="lab_id" placeholder="Enter Lab ID" required>
            </div>

            <div class="input-box">
              <span class="details">Address</span>
              <input type="text" id="address" name="location" placeholder="Enter Company Address" required>
            </div>

            <div class="input-box">
              <span class="details">Website/Certificate Link</span>
              <input type="text" id="link" name="link" placeholder="Link" required>
            </div>

          </div>
          <div class="category">
            <input type="radio" name="category" id="dot-1" value="1">
            <input type="radio" name="category" id="dot-2" value="2">
            <input type="radio" name="category" id="dot-3" value="3">
            <input type="radio" name="category" id="dot-4" value="4">
            <input type="radio" name="category" id="dot-5" value="5">
            <input type="radio" name="category" id="dot-6" value="6">
            <input type="radio" name="category" id="dot-7" value="7">
            <input type="radio" name="category" id="dot-8" value="8">
            <span class="category-title">Category</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="category">Biological Testing</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="category">Chemical Testing</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="category">Electrical Testing</span>
              </label>
              <label for="dot-4">
                <span class="dot four"></span>
                <span class="category">Mechanical Testing</span>

              </label>

              <label for="dot-5">
                <span class="dot five"></span>
                <span class="category">Thermal Testing</span>
              </label>
              <label for="dot-6">
                <span class="dot six"></span>
                <span class="category">Electro-Technical Testing</span>
              </label>
              <label for="dot-7">
                <span class="dot seven"></span>
                <span class="category">Optical Calibration Testing</span>
              </label>
              <label for="dot-8">
                <span class="dot eight"></span>
                <span class="category">Fluid Flow Testing</span>
              </label>
            </div>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <textarea class="form-input" type="text" name="description" id="text" cols="40" rows="10" placeholder="Elaborate your concern"></textarea>
          </div>

          <div class="button">
            <input type="submit" value="Submit" name="submit">
          </div>
        </form>
      </div>
  </div>

</body>

</html>