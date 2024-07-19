<?php
if (
    isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
    
@define('WEB_ROOT', $protocol . $domain);

$url = explode("/", $_SERVER["REQUEST_URI"]);

// Menggunakan Localhost
// $req1       = @$url[1];
// @$req2      = @$url[2];
// @$req3      = @$url[3];
// @$req4      = @$url[5];
// @$req5      = $url[5];
// @$req6      = $url[6];
// @$req7      = $url[7];

// menggunakan Domain Sendiri
$req1       = @$url[0];
@$req2      = @$url[1];
@$req3      = @$url[2];
@$req4      = @$url[3];
@$req5      = $url[4];
@$req6      = $url[5];