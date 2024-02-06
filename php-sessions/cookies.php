<?php

$now = time();                                  // current time measured in the
                                                // number of seconds since the 
                                                // January 1 1970 00:00:00 GMT.
$num_seconds_per_day = 60 * 60 * 24;

$cookie_name = "user";                          // The name of the cookie
$cookie_value = "Sam Smith";                    // The value of the cookie. 
$expiry = $now + ($num_seconds_per_day * 30);   // The time the cookie expires.

// The path on the server in which the cookie will be available on.
// * If set to '/', the cookie will be available within the entire domain. 
// * If set to '/foo/', the cookie will only be available within the /foo/ 
//   directory and all sub-directories such as /foo/bar/ of domain. 
// The default value is the current directory that the cookie is being set in.
$path = "/";

// Cookies are part of the HTTP header, so setcookie() must be called before 
// any output is sent to the browser. 
setcookie($cookie_name, $cookie_value, $expiry, $path);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Cookies</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie '$cookie_name' is not set!";
    }
    else {
        echo "Cookie '$cookie_name' is set and its value is '$_COOKIE[$cookie_name]'";
    }
    ?>
</body>
</html>
