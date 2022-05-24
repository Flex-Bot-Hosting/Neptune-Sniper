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
$json = file_get_contents('https://api.mojang.com/users/profiles/minecraft/Rodney_RWR');
  
// Decode the JSON file
$json_data = json_decode($json,true);
  
// Display data
print_r($json_data);
print_r($json);
print_r($json->name);
}
?>
</body>
</html>
