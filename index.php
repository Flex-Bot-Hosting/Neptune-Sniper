<html>
<head>
    <link rel="stylesheet" href="/css/main.css" />
    <title>Neptune Sniper</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
</head>
<body>
<h1>Neptune Sniper</h1>
  <form action="/" method="post">
      <input type="text" placeholder="Username or UUID" name="searchquery">
  </form>
<?php
if(isset($_POST['searchquery'])) {
    $search = $_POST['searchquery'];
    $jurl = 'https://api.mojang.com/users/profiles/minecraft/$search';
    $jdata = file_get_contents($url); 
    $json = json_decode($data);

    $username = $json->name;
    $uuid = $json->uuid;

    echo "<h2>$username</h2>";
    echo "<h3>UUID: $uuid</h3>";
    echo "<h3><a href='https://namemc.com/$username'>NameMC Link</a></h3>";
}
?>
</body>
</html>
