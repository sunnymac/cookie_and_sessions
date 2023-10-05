<?php
session_start();
$expirtyMinutes = 1;
?>
<html>
<head>
<title>PHP Session Destroy after 30 Minutes</title>
<link rel='stylesheet' href='style.css' type='text/css' />
<link rel='stylesheet' href='form.css' type='text/css' />
</head>
<body>
    <div class="phppot-container">
        <h1>Login</h1>
        <form name="login-form" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Sign in"
                        name="submit"></td>
                </tr>
            </table>
        </form>
<?php
if (isset($_POST['submit'])) {
    $usernameRef = "admin";
    $passwordRef = "test";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // here in this example code focus is session destroy / expiry only
    // refer for registration and login code https://phppot.com/php/user-registration-in-php-with-login-form-with-mysql-and-code-download/
    if ($usernameRef == $username && $passwordRef == $password) {
        $_SESSION['login-user'] = $username;
        // login time is stored as reference
        $_SESSION['ref-time'] = time();
        // Storing the logged in time.
        // Expiring session in 30 minutes from the login time.
        // See this is 30 minutes from login time. It is not 'last active time'.
        // If you want to expire after last active time, then this time needs
        // to be updated after every use of the system.
        // you can adjust $expirtyMinutes as per your need
        // for testing this code, change it to 1, so that the session
        // will expire in one minute
        // set the expiry time and
        $_SESSION['expiry-time'] = time() + ($expirtyMinutes * 60);
        // redirect to home
        // do not include home page, it should be a redirect
        header('Location: home.php');
    } else {
        echo "Wrong username or password. Try again!";
    }
}
?>
</div>
</body>
</html>