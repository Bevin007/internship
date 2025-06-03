<?php
$ip = $_SERVER['REMOTE_ADDR'];
$log = date("Y-m-d H:i:s") . " - " . $ip . "\n";
file_put_contents("ips.log", $log, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IP Logger Page</title>
  <script>
    window.onload = function() {
      alert("Welcome to the site!");
    };
  </script>
</head>
<body>
  <h1>Hello Visitor</h1>
</body>
</html>
