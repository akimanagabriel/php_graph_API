<?php
require_once('config.php');

if(isset($_SESSION['access_token'])){
	header("Location: index.php");
	exit();
}


$redirectTo = "http://localhost/api/callback.php";
$data = ['email'];
$fullURL = $handler->getLoginUrl($redirectTo, $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <title>Login with Facebook</title>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh">
  
  <input type="button" onclick="window.location = '<?php echo $fullURL ?>'" value="Login with Facebook" class="btn btn-primary btn-lg px-5 rounded-pill">

</body>
</html>