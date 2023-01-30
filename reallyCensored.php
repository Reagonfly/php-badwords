<?php 
$username = $_GET["username"];
$password = $_POST["password"];

$censoredpassword=str_replace($password, "*****...", $password);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <body>
    <h1>Welcome <?php echo $_GET['username']; ?></h1>
    <section>
        <h2>Visible</h2>
        <h4>Username: <?php echo $username ?></h4>
        <h4>password: <?php echo $password ?></h4>
    </section>
    <section>
        <h2>Codyfied</h2>
        <h4>username: <?php echo $username ?> <br></h4>
        <h4>password: <?php echo $censoredpassword ?></h4>
    </section>
</body>
</html>