
<?php
//for database
  include ('../../Models/db.php');



  $name=$email=$phone=$space=$pass= $sql="";
  if(isset($_POST['ownersignup'])){
    if(!empty($_POST['ouname'])){
      $name = mysqli_real_escape_string($conn, $_POST['ouname']);
    }



    if(!empty($_POST['pname'])){
      $email = mysqli_real_escape_string($conn, $_POST['pname']);

    }

    if(!empty($_POST['ophone'])){
      $phone = mysqli_real_escape_string($conn, $_POST['ophone']);

    }

    if(!empty($_POST['pnid'])){
      $space = mysqli_real_escape_string($conn, $_POST['pnid']);

    }


    if(!empty($_POST['oaddress'])){
      $address = mysqli_real_escape_string($conn, $_POST['oaddress']);

    }


    if(!empty($_POST['ocpass'])){
      $pass = mysqli_real_escape_string($conn, $_POST['ocpass']);

    }

    $sql = "INSERT INTO prequest (username,Name,phone,nid,password,Address,status)
              VALUES ('$name','$email','$phone','$space','$pass','$address','Active');";

      mysqli_query($conn, $sql);

    //  header("Location:../login.html");



  echo '<script>alert("Your account is under review please try to login after 2 hours")</script>';



  }

  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Space Owner Sign-Up</title>
    <link rel="stylesheet" href="signupparker.css" />
  </head>
  <body>
    <form class="box" action="" method="post">
      <h1>Sign-Up</h1>
      <input type="text" name="ouname" placeholder="User Name" />
      <input type="text" name="pname" placeholder="Full Name" />
      <input type="text" name="ophone" placeholder="Phone Number">
      <input type="text" name="pnid" placeholder="Nid No" />
      <input type="text" name="oaddress" placeholder="Your Address" />
      <input type="password" name="ocpass" placeholder="Password" />
      <input type="submit" name="ownersignup" value="Sign-Up" />
    </form>
  </body>
</html>
