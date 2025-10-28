<?php
$name=$_GET['name'];
$email= $_GET['email'];
?>

<div class="card" style="width: 300px; border: 1px solid #ccc;
border-radius: 8px; padding: 20px; margin: 20px; box-shadow: 0 2px 4 px rgba(0,0,0,1)">
<h3 style=" margin-top: 0;"> User Information</h3>
 <div style="margin-bottom: 10px;">
<strong> Name</strong> <?php echo $name;?>
</div>
<div>
    <strong> Email</strong> <?php echo $email;?>
</div>
</div>