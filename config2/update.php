<?php
header("Content-Type: application/json");

if (!isset($_POST['pause']) || !isset($_POST['enText']) || !isset($_POST['cnText']) || !isset($_POST['cnButton']) || !isset($_POST['enButton'])){
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Too little data', true, 500);
    die('Too little data');
}

$settings = fopen("./settings.conf", "w");
if ($settings === FALSE){
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Unable to open file!', true, 500);
    die("Unable to open file!");
}
$data = array("pause" => $_POST['pause'], "enText" => ($_POST['enText']), "cnText" => ($_POST['cnText']), "enButton" => ($_POST['enButton']), "cnButton" => ($_POST['cnButton']));
$string = serialize($data);
$write = fwrite($settings, $string);
if ($write === FALSE){
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Unable to write a data!', true, 500);
    die("Unable to write a data!");
}
fclose($settings);
echo json_encode($data);