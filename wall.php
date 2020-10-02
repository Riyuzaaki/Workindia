<?php
include_once 'header.php';
include 'remove.php';
?>
<section id="services">
    <div class="container">
        <div class="row">
            
     <?php 
    $sql = "SELECT * FROM todo order by duedate";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
           if ( $_SESSION['agentid']== $row['agentid'])
           {
            echo "<div class='col-md-4'>";
            echo "<h4>".$row['todohead']."</h4>";
            echo "<h6>".$row['duedate']."</h5>";
            echo "<h8>Category: ".$row['Category']."</h8>";
            echo "<p>".$row['todo']."</p>";
            $_SESSION['todoid'] = $row['todoid'];
            echo "<form method='post' action='remove.php'> <button type='submit' name='remove'>Remove</button></form></div>"; 
            } 
        }
    }
?>
        </div>
        </div>
    </section>