<?php  
 session_start();  

 
 include '../php/db.php';

$message = "";
if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT COUNT(*) as cntUser from users where usuario='".$uname."' and pass='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: listado.php');
        }else{
			$message = "Error al ingresar, revise si el usuario y contraseña son correctos.";
        }

    }

}


 ?>  
 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="../css/bootstrap.css">
	 <title>Revisión de proyectos</title>
 </head>
 <style>
 html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
 </style>
 <body>
 <div class="container">
 <h1 align="center" >Módulo de evaluación FIC 2020</h1>
 <form method="post" class="form-signin" action="">
	 <div id="div_login">		 
		 <div>
			 <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="Usuario" />
		 </div><br>
		 <div>
			 <input type="password" class="form-control" id="txt_uname" name="txt_pwd" placeholder="Contraseña"/>
		 </div>
		 <div>
			 <input type="submit" class="btn btn-primary" value="Ingresar" name="but_submit" id="but_submit" />
		 </div> <BR></BR>
		 <?php 
		 
		 if (!empty($message)) {
			 echo "<div class='alert alert-danger' role='alert'>$message</div>";
		 }
		 ?>
	 </div>
 </form>
</div>
 </body>
 </html>