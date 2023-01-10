<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login sederhana</title>
</head>
<body>
    
<h1>FORM LOGIN</h1>                    

	<form class="user" method="POST">
		<div>
			<input id="username" type="text" name="username" placeholder="Masukkan email" required>
    	</div>
		<div>
			<input id="password" type="password" name="password" placeholder="Masukkan password" required>
		</div>
			<input type="submit" name="login" value="Login">
	</form>

    <?php 
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
        
		if($username == 'rizkiasa12@gmail.com'){
            if($password == '12345678'){
			    session_start();
			    $_SESSION['username']=$username;
			    header('location:index.php');
            }
		    else{
			    echo "<script>alert('Password Salah')</script>";
		    }

		}
		else{
			echo "<script>alert('Username tidak terdaftar')</script>";
		}

	}
 ?>
    
</body>
</html>