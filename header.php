<?php
session_start();
include_once 'dbh.php';
if(!isset($_SESSION['agentid']))
{
    header("Location: index.php");
    exit();  
}
?>
<html>
<head>
<title>TODO</title>
<link rel="stylesheet" href="wallstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<!------------------------------------head-------------------------------------->
    <section id="header">
    <nav class="navbar navbar-light">
    <div class="heading"><h1><i class="fa fa-file-text"></i> TODO</h1>    </div>
        <div class="menu">
    <form method='post' action='todo.php'>
        <button type='submit' name='createtodo'>Create TODO</button>
        </form>
    <form method='post' action='wall.php'>
        <button type='submit' name='wall'>My Todo</button>
        </form>
</div>
         <div class="userdetail">

        <form method='post' action='logout.php'>
        <button type='submit' name='logoutsubmit'>Logout</button>
        </form>
    </div>
</nav>
</section>
   <!------------------------------------head--------------------------------------> 