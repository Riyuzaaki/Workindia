
<?php
if(isset($_POST['prdregsubmit']))
{
    session_start();
    include_once 'dbh.php';
    
    $userid = $_SESSION['agentid'];
    $todohead = mysqli_real_escape_string($conn,$_POST['todohead']);
    $date = mysqli_real_escape_string($conn,$_POST['Duedate']);
    $task = mysqli_real_escape_string($conn,$_POST['Task']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    
              $sql= "INSERT INTO todo(agentid, todohead, todo, duedate,Category) VALUES ( '$userid', '$todohead','$task','$date','$category');";
                $result = mysqli_query($conn,$sql);
             header("Location: todo.php?register=sucess");
        
}

else
{
    header("Location: todo.php");
    exit();
}
?>