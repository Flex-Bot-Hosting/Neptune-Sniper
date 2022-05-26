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
    <h4>You can enter up to 10 names seperated by <code>, </code></h4>
<?php
if(isset($_GET['searchquery'])) {
    $search = $_GET['searchquery'];
    foreach (explode(', ', $search) as $key => $value){
        ${'var'.$key} = $value;
        }

    // Read the JSON file
    if(strlen($var0) > 16) {
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
            if(strlen($var1) > 16) {
                $json1 = file_get_contents("https://api.mojang.com/user/profile/$var1");
          } else {
                $json1 = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$var1");
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
            if(isset($var2)) {
                if(strlen($var2) > 16) {
                    $json2 = file_get_contents("https://api.mojang.com/user/profile/$var2");
              } else {
                    $json2 = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$var2");
                }

             // Decode the JSON file
                $json_data2 = json_decode($json2,true);

                if(!isset($json_data2)) {
                    echo "<h2> User does not exsist </h2>";
              } else {
                    $username1 = $json_data2['name'];
                    $uuid1 = $json_data2['id'];

            // Display data
                    echo "<h2>$username2</h2> <br>";
                    echo "<h3>UUID: $uuid2</h3> <br>";
                    echo "<h3>Skin: <img src='https://crafatar.com/renders/body/$uuid2' alt=''></h3>";
                    echo "<h3><a href='https://namemc.com/$username2'>NameMC Link</a></h3>";
                }
            }
                if(isset($var3)) {
                    if(strlen($var3) > 16) {
                        $json3 = file_get_contents("https://api.mojang.com/user/profile/$var3");
                  } else {
                        $json3 = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$var3");
                    }

                 // Decode the JSON file
                    $json_data3 = json_decode($json3,true);

                    if(!isset($json_data2)) {
                        echo "<h2> User does not exsist </h2>";
                  } else {
                        $username3 = $json_data3['name'];
                        $uuid3 = $json_data3['id'];

                // Display data
                        echo "<h2>$username3</h2> <br>";
                        echo "<h3>UUID: $uuid3</h3> <br>";
                        echo "<h3>Skin: <img src='https://crafatar.com/renders/body/$uuid3' alt=''></h3>";
                        echo "<h3><a href='https://namemc.com/$username3'>NameMC Link</a></h3>";
                    }
                }
}
?>
</body>
</html>
