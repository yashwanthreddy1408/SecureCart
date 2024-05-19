<?php
session_start();
@include 'config.php';
if(isset($_POST['submit'])){
       $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
       $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
       $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
       $cpass = isset($_POST['cpassword']) ? md5($_POST['cpassword']) : '';
       $user_type = isset($_POST['user_type']) ? $_POST['user_type'] : '';
      $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email']; 
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email']; 
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
   if(isset($_GET['redirect'])) {
      header("Location: ".$_GET['redirect']);
      exit(); // Ensure script stops here to prevent further execution
  }
};
?>
<style>
      .terms-container label {
         display: inline-block;
         vertical-align: middle;
      }

      .terms-container input[type="checkbox"] {
         margin-right: 5px; /* Adjust as needed */
         vertical-align: middle;
      }
   </style>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style_login.css">

</head>
<body>
   
<div class="form-container">
<div class="loading-spinner"></div>
   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <div class="terms-container">
         <label for="terms"><input type="checkbox" id="terms" name="terms" required></label>
         <label for="terms">I agree to the <a href="termsConditions.php" target="_blank">Terms and Conditions</a></label>
      </div>
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">registser now</a></p>
   </form>

</div>
  <!-- JavaScript for loading spinner -->
  <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('loginForm');
            const spinner = document.querySelector('.loading-spinner');

            form.addEventListener('submit', function () {
                spinner.style.display = 'block';
            });
        });
    </script>
</body>
</html>