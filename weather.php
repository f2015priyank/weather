<?php
define('IMG_PATH', 'images/');
define('FILENAME_K', 'filename');
define('ALT_K', 'alt');
define('TEMPS_K', 'temps');
$previsions = array(
'2018-02-11' => array(
FILENAME_K => 'degagement.gif',
ALT_K => 'icone degaement',
TEMPS_K => '-17ºC',
),
'2018-02-12' => array(
FILENAME_K => 'soleil_nuage.gif',
ALT_K => 'icone soleil et nuage',
TEMPS_K => '-11ºC',
),
'2018-02-13' => array(
FILENAME_K => 'neige.gif',
ALT_K => 'icone de neige',
TEMPS_K => '-12ºC',
),
'2018-02-14' => array(
FILENAME_K => 'soleil.gif',
ALT_K => 'icone soleil',
TEMPS_K => '-15ºC',
),
'2018-02-15' => array(
FILENAME_K => 'neige.gif',
ALT_K => 'icone de neige',
TEMPS_K => '-11ºC',
),
'2018-02-16' => array(
FILENAME_K => 'soleil.gif',
ALT_K => 'icone soleil',
TEMPS_K => '-15ºC',
),
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Weather Table</title>
</head>
<body>
<div>
<header>
<h1>Weather Table</h1>
</header>
<main>
<table>
<?php 

foreach($previsions as $date=> $prevision){
    echo "<tr> \n";
    echo "<td>$date</td>\n";
    foreach ($prevision as $prop=> $val) {
        $property[]=$val;

    }
    echo "<td><img src=".IMG_PATH.$property[0]." alt=".$property[1]."></img></td>\n";
    echo "<td>".$property[2]."</td>\n";
    $property=array();
}?>
</table>
</main>
</div>
</body>
</html>