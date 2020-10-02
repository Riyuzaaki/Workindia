<?php
session_start();

if(isset($_POST['loginsubmit']))
{
    include 'dbh.php';
    $uid = mysqli_real_escape_string($conn,$_POST['agentid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    
 if(empty($uid) || empty($pwd))
    {
        header("Location: login.php?login=empty");
        exit(); 
    }else
    {
        $sql = "SELECT * FROM users WHERE agentid='$uid';";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck<1)
        {
             header("Location: login.php?login=invalidusername");
            exit(); 
        }
        else{
            if($row = mysqli_fetch_assoc($result))
            {  
                $hashedpwd = password_verify($pwd,$row['userpwd']);
                if($hashedpwd == false)
                {
                      header("Location: login.php?login=invalidpwd");
                        exit();
                } else if($hashedpwd == true)
                {
                    
                    $_SESSION['agentid']= $row['agentid'];
                    header("Location: wall.php?login=sucess");
                    exit(); 
                }
                
            }
        }
    }
}
else
{
    header("Location: index.php?login=error");
    exit();
} 