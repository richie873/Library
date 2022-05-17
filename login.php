<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="StyleLogin.css">
    </head>
   
    <body>

    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
    }
	?>
        <div class="container">
          <h1>Login</h1>
          <form action="CekLogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" >
 
			<label>Password</label>
			<input type="password" name="password" class="form_login">
 
			<button><input type="submit" class="tombol_login" value="LOGIN"></button>
             </form>
        </div>     
    </body>
</html>