<?php
/**
 * Return the number of free loans and decrease that number.
 */

const CURRENT_LOAN_STATE_FILE = 'current-loans-counter';
$fileSize = filesize(CURRENT_LOAN_STATE_FILE);

$config = unserialize(file_get_contents('../config/settings.conf'));
$currentLoansState = file_get_contents(CURRENT_LOAN_STATE_FILE);

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

$stmt = $conn->prepare("SELECT count(*) FROM `fingerprint` WHERE `hash` = ?");
$stmt->bind_param("s", $fingerprint);
$stmt->bind_result($result);
$stmt->execute();
$stmt->fetch();
$stmt->close();

if (is_numeric($currentLoansState) && $currentLoansState < $config['maxLoansPerDay'] && !isset($_COOKIE['clicked']) && $result == 0) {
    setcookie('clicked', true, strtotime("tomorrow"));
    $stmt2 = $conn->prepare("INSERT INTO `fingerprint` (`hash`) VALUES (?)");
    $stmt2->bind_param("s", $fingerprint);
    $stmt2->execute();
    $stmt2->close();
    $conn->close();
    file_put_contents(CURRENT_LOAN_STATE_FILE, $currentLoansState + 1);
    echo $currentLoansState;

} else {
    $conn->close();
    echo FALSE;
}
