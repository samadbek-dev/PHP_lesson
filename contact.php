<?php
    $name=$email=$subject=$message="";
    $nameErr=$emailErr=$subjectErr=$messageErr="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $nameErr="Name is required";
    }else{
        $name=$_POST['name'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "faqat ahrflar va bosh joy bo'lishi kerak!";
          }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
     <?= $name ?>   <br>
     <?= $email ?> <br>
     <?= $subject ?> <br>
    <?= $message ?> 
    </li>
</body>
</html>