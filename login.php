<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
	  //echo $sql;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
   
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         session_write_close();
		 header("location: index.php");
		 exit();
      }else {
		
		$error = "EL USUARIO / CONTRASEÑA ES INCORRECTO ";
		
      }
   }
?>
<html>
<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/superhero/bootstrap.min.css" rel="stylesheet">
     <style>
		body{
		  background: #092956;
		}

		.centered-form .panel{
		  background: rgba(255, 255, 255, 0.8);
		  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
		  color: #4e5d6c;
		  
		}

		.centered-form{
		  margin-top: 200px;
		}
</style>
      
<body bgcolor = "#FFFFFF">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">BIENVENIDO</h3>
				</div>
			<div class="panel-body">
			<form action="" method="post">

			<div class="form-group">
				USUARIO: <input type="username" name="username" class="form-control input-sm">
			</div>

			<div class="form-group">
				CONTRASEÑA: <input type="password" name="password" class="form-control input-sm">
			</div>
				<input type="submit" value="Login" class="btn btn-info btn-block">
			</form>
				
			</div>
			<center><?php echo $error;?>
			</div>
			
		</div>
	</div>
	
</body>
</html>