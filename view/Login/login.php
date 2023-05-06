<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
?>
<!DOCTYPE html>
<html>
<?php require_once __ROOT__."\layout\uniLayout\head.php";?>
<body>
<div id="loginMain">
        <div class="loginrow">
            <div class="colm-form">
                <div class="form-container">
                    <form action="loginProcess.php" method="POST">
                        <input type="text" id="user" name="username" placeholder="username"/><br><br>
                        <input type="Password" id="pass" name="password" placeholder="password"/><br><br>
                        <button type="submit" class="btn-login" name="login" default>login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>