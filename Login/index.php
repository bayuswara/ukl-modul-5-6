<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body style="background-image:linear-gradient(to right, #1690CE , #AD2626);">
    <h2>Login</h2>
    <form action="proses-login.php" method="post">
    <table>
        <tr>
            <td><label for="">Username</label></td>
            <td> <input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td> <input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" value="Login" name="btnlogin">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>