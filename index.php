<html>
<head>
    <link rel="stylesheet" href="/css/main.css" />
    <title>Neptune Sniper</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
</head>
<body>
<h1>Neptune Sniper</h1>
  <form action="/" method="get">
      <input type="search" placeholder="Username or UUID" autocorrect="off" spellcheck="false" name="searchquery">
  </form>
<?php
if(isset($_GET['searchquery'])) {
    $search = $_GET['searchquery'];
    foreach (explode(', ', $search) as $key => $value){
        ${'var'.$key} = $value;
        }

    // Read the JSON file
    if(strlen($search) > 16) {
        $json = file_get_contents("https://api.mojang.com/user/profile/$var0");
  } else {
        $json = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$var0");
    }

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
        echo "<h3>Skin: <img src='https://crafatar.com/renders/body/$uuid' alt=''></h3>";
        echo "<h3><a href='https://namemc.com/$username'>NameMC Link</a></h3>";
    }
        if(isset($var1)) {
            if(strlen($search) > 16) {
                $json1 = file_get_contents("https://api.mojang.com/user/profile/$var0");
          } else {
                $json1 = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$var0");
            }

         // Decode the JSON file
            $json_data1 = json_decode($json1,true);

            if(!isset($json_data1)) {
                echo "<h2> User does not exsist </h2>";
          } else {
                $username1 = $json_data1['name'];
                $uuid1 = $json_data1['id'];

        // Display data
                echo "<h2>$username1</h2> <br>";
                echo "<h3>UUID: $uuid1</h3> <br>";
                echo "<h3>Skin: <img src='https://crafatar.com/renders/body/$uuid1' alt=''></h3>";
                echo "<h3><a href='https://namemc.com/$username1'>NameMC Link</a></h3>";
            }
        }
}
?>
</body>
</html>
