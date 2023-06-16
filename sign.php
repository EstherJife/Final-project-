<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $nrc=$_POST['nrc'];
    $dob=$_POST['dob'];
    $phone_no=$_POST['phone_no'];
    $sex=$_POST['sex'];
    $occupation=$_POST['occupation'];
    $hobbies=$_POST['hobbies'];
    $bank=$_POST['bank'];
    $bank2=$_POST['bank2'];
    $bankbranch=$_POST['bankbranch'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

   $sql="INSERT INTO registration(firstname,lastname,email,address,nrc,dob,phone_no,sex,occupation,hobbies,bank,bank2,bankbranch,password,password2)
   values('$firstname','$lastname','$email','$address','$nrc','$dob','$phone_no','$sex','$occupation','$hobbies','$bank','$bank','$bankbranch','$password','$password2')";
   $result=mysqli_query($con, $sql);
   if($result){  
       echo "Data inserted successfully";
   }else{
       die(mysqli_error($con));
   }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>signup page</title>
  </head>
  <body>
  <form name="signup" action="sign.php" method="post" >
            <h1 class="text-center">Register with us</h1>

            <div class="form-group col-md-6l">
                <label for="username">FirstName</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-group col-md-6">
                <label for="username">Lastname</label>
                <input type="text" name="lastname" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" required>
                 </div>
           
            <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="address" name="address"required >
                </div>
            
            <div class="form-group col-md-6">
                <label for="NRC">NRC</label>
                <input type="nrc" name="nrc" size="7" required>
                
            </div>

            <div class="form-group col-md-6">
                <label for="DOB">DOB</label>
                <input type="date" name="dob" required>
            </div>

            <div class="form-group col-md-6">
                <label for="Phone Number">Phone Number</label>
                <input type="phone_no" name="phone_no" value="+260" required>
            </div>

            <div class="form-group col-md-6">
                <h3>Sex</h3>
             <input type="radio" name="sex" value="Female">   
                <label for="Female">Female</label><br>
                <input type="radio"  name="sex" value="Male"> 
                <label for="Male">Male</label><br>
            </div>

            <div class="form-group col-md-6">
                <h3>Occupation</h3>
                   <input type="radio"  name="occupation" value="Student">   
                   <label for="Student">student</label><br>
                   <input type="radio"  name="occupation" value="Worker"> 
                   <label for="Worker">worker</label><br>
                   <input type="radio"name="occupation" value="Business person">   
                   <label for="Business person">business person</label><br>
               </div>

               <div class="form-group col-md-6">
                <label for="Hobbies">Hobbies</label>
                <input type="hobbies" name="hobbies" >
            </div>

            <div class="form-group col-md-6">
                <label for="Bank">Bank.No</label>
                <input type="number" name="bank" required>
               
            </div>
            <div class="form-group col-md-6">
                <label for="Bank2">Confirm Account number</label>
                <input type="number" name="bank2" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="Bank Branch">Bank Branch</label>
                    <input type="bankbranch" name="bankbranch" required>
                 
            <div class="form-group col-md-6">
                <label for="Password">Password</label>
                <input type="password" name="password" required>
                
            </div>
            <div class=""form-group col-md-6>
                <label for="Password2">Confirm passsword</label>
                <input type="password" name="password2" required>
              
            </div>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn" >Register</button>
            <p>Already have an account?
            <a href="home.html">back to home</a>
        </form>
    </div>
 
  </body>
</html>