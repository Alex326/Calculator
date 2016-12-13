<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./bundle.js"></script>
    <title>first_project</title>
</head>
<body>
<?php

function getTextFunc()
{
    return 'text';
};

    include './lib.php';
?>


<?php
/*
    define(HOST, 'host');

    $name = 'one';
    echo "<h1>Hello $name World</h1>";
    echo '<h2>Hello'.$name.'World</h2>';

    if(isset($name)) echo $name;
    else echo 'none';

    gettype($name);

    $names = array('Blue', 'Yellow', 'Green');

    echo '<ul>';
    foreach($names as $n)
    {
        echo '<li>'.$n.'</li>';
    }
    echo '</ul>';

*/
?>
<!--Hello <?=isset($name)?$name:'World' ?>-->
<!--
<ul>
<?php
    foreach($names as $n)
        ?><li><?=$n;?></li><?
?>
</ul>-->

<?=$getSum(2,5);?>

<?php
function InitNames()
{
    $names[0] = 'Coolname';
    $names['somename'] = 'Supername';
    $names[1] = 'Awesomename';
    return $names;
}
function ShowNames()
{
    $names = InitNames();
    foreach ($names as $name) {
        echo $name.'<br>';
    }
}
ShowNames();
?>


</body>
</html>
