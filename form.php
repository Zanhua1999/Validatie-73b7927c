<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <form action="form.php" method="post" >
    <input type="text" name="mail" placeholder="Voer je E-mail adres in">
    <input type="submit" name="submit" value="Verstuur">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $email = $_POST['mail'];
  if (filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    echo "<h1>Geldige Email!<h1>";
  }
  else
  {
    echo "<h1>Geen geldige Email<h1>";
  }
}

       ?>