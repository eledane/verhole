<?php
/**
 * Return the number of free loans and decrease that number.
 */


//require_once dirname(__FILE__) . '/../stories/db-config.php';
$servername = "localhost";
$username = "c12hccnmcl";
$password = "hpQyhIX_70";
$dbname = "c12hccnmcl";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fingerprint = mysqli_real_escape_string($conn, $_POST['fingerprint']);

$stmt = $conn->prepare("SELECT count(*) FROM `fingerprint` WHERE `hash` = ? AND `used` = 0");
$stmt->bind_param("s", $fingerprint);
$stmt->bind_result($result);
$stmt->execute();
$stmt->fetch();
$stmt->close();

if ($result == 0) {
    $stmt2 = $conn->prepare("INSERT INTO `fingerprint` (`hash`) VALUES (?)");
    $stmt2->bind_param("s", $fingerprint);
    $stmt2->execute();
    $stmt2->close();
    $conn->close();
    

} else {
    $conn->close();
}
echo TRUE;