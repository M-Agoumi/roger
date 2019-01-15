<!DOCTYPE html>
<html>
<head>
	<title>Roger</title>
	<link rel="stylesheet" type="text/css" href ="/layout/style/style.css"/>
</head>
<body>
<div class="page">
	<div class="nav">
		<div class="logo">ROGER</div>
		<div class="navbar-menu">
			<span>login</span>
			<span class="last">Register</span>
		</div>
	</div>
	<div class="body">
		<canvas id="c"></canvas>
		<form class="login" method="POST" action="/">
			<div class="group">
				<label>Username :</label>
				<input type="text" class="input form-input" name="username" placeholder="Username or mail" autocomplete="off" />
			</div>
			<div class="group">
				<label>Password&nbsp;&nbsp;:</label>
				<input type="password" class="input form-input" name="password" placeholder="The Password" autocomplete="off" />
			</div>
			<div class="group">
				<label></label>
                                <input type="submit" class="input" name="login" value="LOGIN"/>
                                <button class="input">SIGN UP</button>
			</div>
		</form>
	</div>
	<div class="footer">

	</div>
	<script src="/layout/js/script.js"></script>
</div>
</body>
</html>
