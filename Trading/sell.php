<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Vehicle Sell Form</title>
        
<style>
body {font-family: 'Times New Roman', Times, serif; 
background-image: url();
background-size: 100%;
background-repeat: repeat-y;}
       
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}



/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .Sellbtn{
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  position: absolute;
  left: 350px;
  margin: 20px;
  max-width: 800px;
  padding: 16px;
  background-color: white;
  
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .Sellbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <form action="sells.php" method="POST" >    

  <div class="container"style="padding-left:100px;width:500px">
    <h1 style="padding-top: 100px,">To Sell a Vehicle</h1>
    <p>Please fill in this form to sell a car/bike.</p>
    <hr>

    <label for=" FullName"><b> FullName</b></label>
    <input type="text"  placeholder="Enter name" name="FullName" required><br>


    <label for="Phoneno"><b>Phone Number</b></label>
    <input type="text"  placeholder="Enter Phone number" name="Phoneno" required><br>
<br>


    <br>
        <tr>
          <td class="tdLabel"><label for="Selecttype" class="label" required><b>Select Type</b></label></td>
          <td><select name="Selecttype" required id="Selecttype" style="width:160px">
          <option value="Car">Car </option>
          <option value="Bike">Bike</option>
         
          </select>
          </td>
          </tr><br>
          <br>
    <label>

   
          
        <label for="Brand"><b>Vehicle Brand</b></label>
        <input type="text" placeholder="Enter Brand name" name="Brand" required><br>
        <br>

        <label for="VehicleName"><b>Vehicle Name</b></label>
    <input type="text"  placeholder="Your answer" name="VehicleName" required><br>
    <br>

    <label for="Vehiclecolor"><b>Vehicle color</b></label>
    <input type="text"  placeholder="Your answer" name="Vehiclecolor" required><br>
    <br>

    <label for="VehicleMilage"><b>Vehicle Milage</b></label>
    <input type="text"  placeholder="Your answer" name="VehicleMilage" required><br>
    <br>

    <label for="VehiclePrice"><b>Vehicle Price</b></label>
    <input type="text"  placeholder="Your answer" name="VehiclePrice" required><br>
    <br>


    
      
    <div class="clearfix">
    <a href="sell.php">  <button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" name="sell" class="Sellbtn">Sell</button>
    </div>
  
  </div>
</form>

</body>
</html>