<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - HRMS</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  </head>
  <body>
    <form class="login-form" action="../controller/login.php" method="post">
      <h1>Login</h1>
      <div class="txtb">
        <input type="text" name="username" value="" placeholder="Username">
      </div>
      <div class="txtb">
        <input type="password" name="password" value="" placeholder="Password">

      </div>
      <input type="submit" class="logbtn" name="" value="Login">
      <p>

      <a id="refister" href="../views/register.html"> Not a User? Register Here</a>

    </p>
    </form>
  </body>
</html>
