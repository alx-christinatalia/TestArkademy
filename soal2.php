<html>
<head>
	<title>Soal Kedua</title>
</head>
<style>
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
	<body>
		<form onSubmit="alert('Submitted.); return false;">
			<input type="text" title="8 Character Username and use underscore" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,}$" placeholder="Username" required/>
		<br>
		<br>
			<input type="password" title="8 Character Password, Use Uppercase, Lowercase and Numeric" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" required/>
			<input type="submit" value="Login"/>
		</form>
	</body>
</html>

<!-- <html>
<head></head>
<body>
	<?php
	// Membuat variabel
	
	$username="";
	$pass = "";
	$namaErr = "";
	$usernameErr = "";
	$passErr = "";
	$username_valid = true;
	$username_valid_msg = "";
	$password_valid = true;
	$password_valid_msg ="";
	
	// Cek form sudah di klik submit/belum
	if(isset($_POST['submit'])){
		
		$username = trim($_POST['username']);
		$pass = trim($_POST['pass']);
		
		
		// Kode cek username hanya boleh huruf a-z dan A-Z
		if(!preg_match("/^[a-zA-Z]*$/",$username)){
			$username_valid = false;
			$username_valid_msg = "Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi.<br>";
		}

		
		
		
	}
?>
 
<h3>From Register</h3>
 
<form action="soaldua.php" method="post">
	
	Username : <input type="text" title="8 Character Username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" placeholder="Username" required/>
	Password : <input type="password" title="8 Character Password, Use Uppercase, Lowercase and Numeric" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" required/>
	<input type="submit" name="submit" value="Register">
</form>
</body>
</html> -->
