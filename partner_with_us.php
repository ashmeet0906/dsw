<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Partner With Us </title>--->
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="container">
    <div class="title">Work With Us</div>
     <form action="connect.php" method="post">
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name" required>
          </div>
          <div class="input-box">
            <span class="details">Company Email ID</span>
            <input type="text" id="company_email_id" name="company_email_id" placeholder="Enter Company Email" required>
          </div>
          <div class="input-box">
            <span class="details">Lab ID</span>
            <input type="text" id="lab_id" name="lab_id" placeholder="Enter Lab ID" required>
          </div>
	
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" id="address" name="address" placeholder="Enter Company Address" required>
          </div>

          <div class="input-box">
            <span class="details">Website/Certificate Link</span>
            <input type="text" id="link" name="link" placeholder="Link" required>
          </div>
         
        </div>
        <div class="category">
          <input type="radio" name="category" id="dot-1" value="Biological_Testing">
          <input type="radio" name="category" id="dot-2" value="Chemical_Testing">
          <input type="radio" name="category" id="dot-3" value="Electrical_Testing">
	<input type="radio" name="category" id="dot-4" value="Mechanical_Testing">
	<input type="radio" name="category" id="dot-5" value="Thermal_Testing">
	<input type="radio" name="category" id="dot-6" value="Electro_Technical_Testing">
	<input type="radio" name="category" id="dot-7" value="Optical_Calibration_Testing">
	<input type="radio" name="category" id="dot-8" value="Fluid_Flow_Testing">
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
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
