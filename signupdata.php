
<?php
if(isset($_POST['signupsubmit']))
{
    include_once 'dbh.php';
    
    $agentid = mysqli_real_escape_string($conn,$_POST['agentid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);

         $sql = "SELECT * FROM users WHERE username='$username'";
         $result = mysqli_query($conn,$sql);
         $resultcheck = mysqli_num_rows($result);
          if($resultcheck>0)
          { header("Location: signup.php?signupo=usertaken");
              exit();
          }
          else
          {
              $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
              $sql= "INSERT INTO users( agentid, userpwd) VALUES ('$agentid','$hashpwd');";
              $result = mysqli_query($conn,$sql);
              header("Location: registered.php?Account created");
          }
        
}

else
{   
    header("Location: signup.php");
    exit();
}
?>