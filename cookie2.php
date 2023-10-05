<?php
setcookie("test_cookie", "test", time() + 100, '/');
?>


click here to remove cookie 
<form method="post">

<input type=submit name"delcookie" name='btn1'> </input>
</form>
<html>
<body>

<?php

if(isset($_POST['btn1']))
{
    setcookie("test_cookie", "test", time() - 100, '/');
}
if(isset($_COOKIE['test_cookie'])) {
  echo "Cookies availabe.";
} else {
  echo "Cookies not available.";
}
?>

</body>
</html>