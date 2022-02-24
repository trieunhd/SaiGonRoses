<?php 
setcookie("user","logout",time()-60, "/"); 
header("Location: /auth/login.php");