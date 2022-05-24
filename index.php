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
    $jurl = 'https://api.mojang.com/users/profiles/minecraft/Rodney_RWR';
    $jdata = file_get_contents($jurl); 
    $json = json_decode($jdata);

    $username = $json->name;
    $uuid = $json->id;

    echo "<h2>$username</h2>";
    echo "<h3>UUID: $uuid</h3>";
    echo "<h3><a href='https://namemc.com/$username'>NameMC Link</a></h3>";
}
?>
</body>
</html>
