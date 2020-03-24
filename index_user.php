<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>login</title>
    <style>
    .form{
           margin: 10% 0 0 25%;
           float: left;
           width: 60%;
       }
       .input{
           padding: 1%;
           color: #777777;
           font-size: 14pt;
           float: left;
           width: 80%;
           margin-bottom: 1%;
       }
       .submit{
           padding: 1%;
           color: #fff;
           background-color: #11b022;
           font-size: 14pt;
           float: center;
           width: 80%;
       }
       .welcome{
           color: #11bb22;
           font-size: 20pt;
           font-weight: 900;
       }
    </style>
  </head>

  <body>
    <div class="form">
      <span class="welcome">Halaman Awal</span>
      <form action="login.php" method="post">
        <input class="input" type="text" name="username" placeholder="Username"><br>
        <input class="input" type="password" name="password" placeholder="Pasword"><br>
        <input class="submit" type="submit" name="login" value="Login"><br>
        <br><br>
        <br><br>
      </form>
      <a href="register.php" class="submit" align="center">Daftar</a>
    </div>
  </body>
</html>
