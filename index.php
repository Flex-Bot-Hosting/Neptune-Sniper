<?php
$accname1 = "Flexium";
$accsearch1 = "-4";
$acclink = "<a href='https://namemc.com/$accname1'>Click Here</a>";
$accavail1 = "<p style='color: red;'>Not-Available</p>"
?>
<html>
<head>
    <link rel="stylesheet" href="/css/main.css" />
    <title>Neptune Sniper</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
</head>
<body>
<h1>Neptune Sniper</h1>
    <table>
    <tbody><tr>
        <th>Name</th>
        <th>Searches</th>
        <th>NameMC Link</th>
        <th>Availability</th>
    </tr>
    <tr>
    <td>
        <?php echo "$accname1";?>
    </td>
    <td>
        <?php echo "$accsearch1";?>
    </td>
    <td>
        <?php echo "$acclink";?>
    </td>
    <td>
        <?php echo "$accavail1";?>
    </td>
    </tr>
    <tr>
    <td>
        (php api code name)
    </td>
    <td>
        (php api code searches)
    </td>
    <td>
        (php api code link)
    </td>
    <td>
        (php api code available)
    </td>
    </tr>
    <tr>
    <td>
        (php api code name)
    </td>
    <td>
        (php api code searches)
    </td>
    <td>
        (php api code link)
    </td>
    <td>
        (php api code available)
    </td>
    </tr>

    </tbody></table>
</body>
</html>
