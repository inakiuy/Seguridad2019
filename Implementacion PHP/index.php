<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>UCU - Seguridad Informatica 2019v2</title>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="./api/user/login.php" method="GET">
        <div class="group">
          <label for="user" class="label">Usuario</label>
          <input id="username" name="username" type="text" class="input" value="">
        </div>
        <div class="group">
          <label for="pass" class="label">Contraseña</label>
          <input id="password" name="password" type="password" class="input" data-type="password" value="">
        </div>
        <div class="group">
          <!--linea modificada puse name-->
          <input id="check" type="checkbox" name="check" class="check" checked>
          <label for="check"><span class="icon"></span> Mantenerme logueado</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <!--<a href="#forgot">Olvidó su contraseña?</a>-->
        </div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Usuario</label>
          <input id="username" name="username" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Contraseña</label>
          <script src="api/user/checkPass.js"></script>
          <input id="password2" name="password" type="password" class="input" data-type="password" onkeyup="checkPass();" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="confirm2" type="password" class="input" data-type="password" onkeyup="checkPass();" required>
          <span id="confirm-message2" class="confirm-message"></span>
        </div>
        <div class="group">
          <input id="butt" type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Ya eres miembro?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  

</body>

</html>
