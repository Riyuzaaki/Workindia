<?php
include_once 'header.php';
?>
<div>
<div class="container">
<h1>Create TODO</h1><br>
<form method="post" action="tododata.php">
<input type="text" name="todohead" placeholder="Heading"><br><br>
<input type="date" name="Duedate" placeholder="Due Date"><br><br>
<input type="text" name="category" placeholder="Category"><br><br>
<textarea name='Task' placeholder='Task Description'></textarea><br><br>
<button type="submit" name="prdregsubmit">Register</button>
</form>
</div>
</div>