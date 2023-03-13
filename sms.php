<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/sms.css">

	<title>SMS APP</title>
</head>
<body>
	<!-- This is for the glow -->
	<div id="design" class="glow"></div>


	<div class="container">
		<section>
			<div id="welcome-note">
				<h1>WELCOME TO STEVE'S <br> <span>SMS APP</span> </h1>
			</div>
		</section>
	</div>

	<div class="container form-design add-shadow">

		<form action="yourinfo.php" method="post">

		  <div class="mb-3">
		    <label for="username" class="form-label">Enter Username</label>
		    <input type="text" class="form-control" name="username" id="username" placeholder="Please enter your Username" aria-describedby="usernameHelp">
		  </div>

		  <div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Please enter your password">
		  </div>

		  <div class="mb-3">
		    <label for="senderid" class="form-label">Enter Sender ID</label>
		    <input type="text" class="form-control" name="senderid" id="senderid">
		  </div>

		  <div class="mb-3">
		    <label for="phone_number" class="form-label">Phone Number</label>
		    <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="233557419724,233574773958">
		  </div>

		  <div class="mb-3">
		    <label for="textarea" class="form-label">Enter Message</label>
		    <textarea class="form-control" name="message" id="textarea" rows="5"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary mb-3">
		  	Submit
		  </button>

		</form>
</div>

</body>
</html>