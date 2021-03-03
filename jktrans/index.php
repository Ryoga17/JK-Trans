<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <center>
    <section class="login">
        <h1 class="title">Login</h1>
        <form action="login.php" method="$_POST" class="form">
            <label for="">Username</label> <br>
            <input type="text" name="username" class="form"><br>

            <label for="">Password</label><br>
            <input type="password" name="password" class="form"> <br><br>
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
    </center>
</body>
</html>