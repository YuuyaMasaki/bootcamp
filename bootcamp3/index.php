<?php
$ua = $_SERVER['HTTP_USER_AGENT'];

if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {

    header("Location:mery.html");
    exit();

} else {

    header("Location:mery-pc.php");
    exit();
}