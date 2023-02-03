<!DOCTYPE html>
<html>
<head><title>membuat from login dangan javascript</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
</br>
<br/>
<center><h2>FROM LOGIN</h2></center>
<br/>
<div class="login">
<br/>	
<form action="login.php" method="post" onsubmit="return submit()">	
<div>
	<label>username</label>
	<input type="text" name="username" id="username"/>
</div>
<div>
	<label>password</label>
	<input type="password" name="password" id="password"/>
</div>
<div>
	<input type="submit" value="login" class="tombol"/>
</div>
</form>
</div>
</body>
<script type="text/javascript">
function validasi (){
	var username = documen.getElementById("username").value;
	var password = documen.getElementById("password").value;
	if (username!=""&&password!=""){
		return true;
	}  else {
		alert('username dan password harus diisi!');
		return ealse;}}
</script>
</html>