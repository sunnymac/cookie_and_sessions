<?php
session_start();
?>
<html>
<head>
<title>PHP Session Destroy after few Minutes</title>
<link rel='stylesheet' href='style.css' type='text/css' />
<link rel='stylesheet' href='form.css' type='text/css' />
</head>
<body>
    <div class="phppot-container">
<?php
if (! isset($_SESSION['login-user'])) {
    echo "Login again!<br><br>";
    echo "<a href='login.php'>Login</a>";
} else {
    $currentTime = time();
    if ($currentTime > $_SESSION['expiry-time']) {
        require_once __DIR__ . '/destroy-session.php';
        echo "Session expired!<br><br><a href='login.php'>Login again!</a>";
    } else {
        ?>
        <h1>Welcome <?php echo $_SESSION['login-user'];?>!</h1>

        <br>  Session will be auto deleted after few minutes!
        <a href='logout.php'>Log out</a>
<?php
    }
}
?>
</div>
</body>
</html>
