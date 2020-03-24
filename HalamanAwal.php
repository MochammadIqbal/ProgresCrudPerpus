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
      <span class="welcome">Masuk Sebagai</span>
      <form action="login.php" method="post">
        <br><br>
        <a href="index_user.php" class="submit" align="Left">User</a><br><br>
        <a href="index_admin.php" class="submit" float="center">Admin</a>

      </form>
    </div>
  </body>
</html>
