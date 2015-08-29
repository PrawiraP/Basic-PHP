<!DOCTYPE html>
<html>
<head>

	<title> My PHP Web Application</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
</head>
<body>
	<p>
	 This is an HTML web page 
	</p>


<form action='form1.php' method="POST">
<fieldset>
<label for="nama">Nama Anda:</label>
	 <input type="text" name="nama" size="40" placeholder="please insert your name" required> <br>
	 <label for="pswd">Password:</label> 
	 <input type="password" name="pswd" placeholder="type your password" required> <br>
	 <label for="myemail">Email:</label> 
	 <input type="email" name="myemail" placeholder="please insert your email"required> <br>
	 <label for="catatan">Catatan</label> <br>
	 <textarea rows=3 name="catatan" optional>
	 </textarea>
	 <br>
	 <input type="radio" name="gender" value="M"required> Male 
	 	 <input type="radio" name="gender" value="F"required> Female <br>
			<input type="checkbox" name="os1" value="win"> Pengguna Windows <br>
				<input type="checkbox" name="os2" value="linux"> Pengguna linux <br>
	 
	 
	 <input type="submit" value="Submit"> <br>
</form>

</body>
</html>