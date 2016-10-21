<?php 
 
//    $_SESSION['user']='';
//    unset($_SESSION['user']);
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>SSA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./resource/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="form.css">
  
</head>
<body>
<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
//    foreach ($_SESSION as $key=>$val)
//    echo $key." =".$val."<br/>";
?>
