<html>
<head>
    <link rel="stylesheet" href="/css/main.css" />
    <title>Neptune Sniper</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
</head>
<body>
<h1>Neptune Sniper</h1>
  <form action="/" method="get">
      <input type="search" placeholder="Username or UUID" value="<?php echo $_GET['searchquery'];?>" autocorrect="off" spellcheck="false" name="searchquery">
  </form>
    <h4>You can enter multiple names sepereated by a colon <code style="color:white;">,</code></h4>
<?php
if(isset($_GET['searchquery'])) {
    $search = $_GET['searchquery'];
    foreach (explode(', ', $search) as $key => $value){
        ${'var'.$key} = $value;
        if(strlen(${'var'.$key}) > 16) {
            ${'json'.$key} = file_get_contents("https://api.mojang.com/user/profile/${'var'.$key}");
        } else {
            ${'json'.$key} = file_get_contents("https://api.mojang.com/users/profiles/minecraft/${'var'.$key}");
        }

        // Decode the JSON file
        ${'jsondata'.$key} = json_decode(${'json'.$key},true);

        if(!isset(${'jsondata'.$key})) {
            echo "<h2> User does not exsist </h2>";
        } else {
            ${'username'.$key} = ${'jsondata'.$key}['name'];
            ${'uuid'.$key} = ${'jsondata'.$key}['id'];

            // Display data
            echo "<h2>${'username'.$key}</h2> <br>";
            echo "<h3>UUID: ${'uuid'.$key}</h3> <br>";
            echo "<h3>Skin: <img src='https://crafatar.com/renders/body/${'uuid'.$key}' alt=''></h3>";
            echo "<h3><a href='https://namemc.com/${'username'.$key}'>NameMC Link</a></h3>";
        }
    }
}
?>
</body>
</html>
