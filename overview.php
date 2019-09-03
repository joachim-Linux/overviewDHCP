<!DOCTYPE html>
<html>
  <h1>Overzicht DHCP</h1>

<?php
//refresh (update)
$page = $_SERVER['PHP_SELF'];
$sec = "10";
header("Refresh: $sec; url=$page");
$status = shell_exec("service isc-dhcp-server status | grep active");
echo"<pre>Status= $status</pre>";

//info gather dhcp
$output = shell_exec('dhcp-lease-list');
echo "<pre>$output</pre>";
?>
</html>
