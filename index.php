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

    // Read the JSON file 
    $json = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$search");

    // Decode the JSON file
    $json_data = json_decode($json,true);

    if(!isset($json_data)) {
        echo "<h2> User does not exsist </h2>";
    } else {
        $username = $json_data['name'];
        $uuid = $json_data['id'];

        // Display data
        echo "<h2>$username</h2> <br>";
        echo "<h3>UUID: $uuid</h3> <br>";
        echo "<h3>Skin: <img src='http://textures.minecraft.net/texture/$uuid' alt=''></h3>";
        echo "<h3><a href='https://namemc.com/$username'>NameMC Link</a></h3>";
    }
}
?>
</body>
</html>
