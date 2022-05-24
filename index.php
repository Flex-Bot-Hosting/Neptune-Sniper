<html>
<head>
    <link rel="stylesheet" href="/css/main.css" />
    <title>Neptune Sniper</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
</head>
<body>
<h1>Neptune Sniper</h1>
  <form action="/" method="get">
      <input type="text" placeholder="Username or UUID" name="searchquery">
  </form>
<?php
if(isset($_GET['searchquery'])) {
$search = $_GET['searchquery'];
$url = 'https://api.mojang.com/users/profiles/minecraft/$search';
$JSON = file_get_contents($url);

// echo the JSON (you can echo this to JavaScript to use it there)
echo $JSON;

// You can decode it to process it in PHP
$data = json_decode($JSON);
var_dump($data);

    echo "<h2>$username</h2>";
    echo "<h3>UUID: $uuid</h3>";
    echo "<h3><a href='https://namemc.com/$username'>NameMC Link</a></h3>";
}
?>
</body>
</html>
