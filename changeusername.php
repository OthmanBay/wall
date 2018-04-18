<?php
session_start();
$uid_value = $_SESSION['username'];?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> <a id="username"><?php echo $uid_value;?></a></h1>

<form method="get" action="includes/username.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Username:<input type="text" name="voornaam" value="<?php echo $uid; ?>" </label>
        <br>

        <input type="submit" name="submit" value="Change">

</form>
</body>
</html>
