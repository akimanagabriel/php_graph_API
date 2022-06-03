<?php
session_start();

if (!isset($_SESSION['access_token'])) {
	header("Location: login.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>My profile</title>
</head>

<body>

	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col d-flex align-items-center justify-content-between">
				<h1> Welcome <?php echo $_SESSION['userData']['first_name'], " ", $_SESSION['userData']['last_name'] ?></h1>
				<span style="margin-left: 10px;"><a href="logout.php" class="btn btn-sm px-3 btn-primary">Sign out</a></span>
			</div>
		</div>
		<div class="row justify-content-center">

			<div class="col-md-3 text-center">
				<img class="img-fluid rounded-circle" src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
				<a class="btn btn-sm px-5 btn-primary" href="<?php echo $_SESSION['userData']['picture']['url'] ?>" style="margin-top:10px">Download Image</a>

			</div>

			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id'] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name'] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userData']['email'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>


</body>

</html>