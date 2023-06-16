<?php
 $login=0;
 $invalid=0;
 if ($_SERVER['REQUEST_METHOD']=='POST'){
     include 'connect.php';
     
 
     $firstname=$_POST['firstname'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     
    $sql="SELECT firstname, email, password FROM registration" ;
    $result=mysqli_query($con,$sql);
    if($result){  
     $num=mysqli_num_rows($result);
     if($num>0){
         $login=1;
         session_start();
         $_SESSION['firstname']=$firstname;
         $_SESSION['email']=$email;
         $_SESSION['password']=$password;
         header('location:welcome.php');
 
 
    }else{
     $invalid=1;
    }
 }
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    
<?php
if($login){
    echo '<div class="alert-sucess alert-dismissible fade show" role="alert">
        <strong>Success</strong> You are successfully loggedin.
        <button type="button" class="close" data-dismiss="alert" aria-labe="close">
            <span aria-hidden="true">&times;</span>
        </button>  
        </div>';
}
?>

<?php
if($invalid){
    echo '<div class="alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> invalid login.
        <button type="button" class="close" data-dismiss="alert" aria-labe="close">
            <span aria-hidden="true">&times;</span>
        </button>  
        </div>';
}
?>

    <div class="loginbox">
        <div class="container mt-5">
            <form>
                <h2>Login</h2>
                <form name="signup" action="welcome.php" method="post" >
                <div class="form-control">
                    <label for="firstname">firstname</label>
                    <input type="text" placeholder="Enter firstname" name="firstname">

                    <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" required>
                 </div>
                    
                    <div class="password-container">
                    <label for="Password">password</label>
                        <input type="password" placeholder="Password..." name="password">
                        <i class="fa-solid fa-eye" id="eye"></i>
                      </div>

                <input type="checkbox" checked="checked">Remember me<br>
                Forgot <a href="#" id="resetpassword">password?</a><br>
                <button type="login">Login<a href="./SHOP.html"></button>
                
                <button type="button" class="cancelbtn">Cancel</button>
                <div class="Register">
                 <p>Don't have an account?<a href="sign.php">SIGN UP here</a></p>
                </div>

            </form>
        </div>

<script>
    const passwordInput = document.querySelector("#password")
const eye = document.querySelector("#eye")
eye.addEventListener("click", function(){
  this.classList.toggle("fa-eye-slash")
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
  passwordInput.setAttribute("type", type)
})
</script>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="option.js"></script>
	<script type="text/javascript">
		var resetpassword_options = {};
		resetpassword_options.container = "resetpassword-container";
		resetpassword_options.onSuccess = function(response) {
			// On Success
			console.log(response);
		};
		resetpassword_options.onError = function(errors) {
			// On Errors
			console.log(errors);
		}

		LRObject.util.ready(function() {
			LRObject.init("resetPassword", resetpassword_options);
		});
	</script>



</body>
</html>