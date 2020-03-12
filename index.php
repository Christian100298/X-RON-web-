<!DOCTYPE html>


<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <div class="login-box">
        <img src="img/logo.jpg" class="avatar" alt="Avatar Image">
        <h1>Administrador</h1>
        <form action="prueba.php" method="post">
            <label for="username" >Matrícula</label>
            <input type="text" id="inputMatricula" value="12345" placeholder="Ingrese Matrícula" name="inputMatricula">
            <label for="password">Contraseña</label>
            <input type="password"id="inputPassword" value="12345" placeholder="Ingrese contraseña" name="inputPassword">
            <input type="submit" value="Iniciar Sesión" id="buttonLogin">
            
        </form> 
    </div>
    <SCRIPT  language=JavaScript> 
            function go(){

            if (inputMatricula.value=='12345' && inputPassword.value=='12345'){ 
             document.form.submit(); 
             } 
            else{ 
            alert("Porfavor ingrese, nombre de usuario y contraseña correctos."); 
            } 
            } 
            </SCRIPT>
</body>
</html>


