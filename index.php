<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0">
  <title>test</title>
</head>
<body">
  <?php

$conn = new mysqli('sql8.freemysqlhosting.net', 'sql8194103', 'RdxTLtHByD');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</body>
</html>
