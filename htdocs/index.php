<?php
echo "[test] Welcome, you came from: ";
echo "<br>";
if (isset($_SERVER["REMOTE_ADDR"])) { echo "<br>REMOTE_ADDR: "     . $_SERVER["REMOTE_ADDR"]; }
if (isset($_SERVER["HTTP_X_REAL_IP"])) { echo "<br>HTTP_X_REAL_IP: "  . $_SERVER["HTTP_X_REAL_IP"]; }
if (isset($_SERVER["HTTP_VIA"])) { echo "<br>HTTP_VIA: "        . $_SERVER["HTTP_VIA"]; }
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) { echo "<br>HTTP_X_FORWARDED_FOR: " . $_SERVER["HTTP_X_FORWARDED_FOR"]; }
if (isset($_SERVER["HTTP_USER_AGENT"])) { echo "<br>HTTP_USER_AGENT: " . $_SERVER["HTTP_USER_AGENT"]; }
echo "<hr>";
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

?>
