<?php
/**
 * This is a cron file for reset a number of free loans per one day.
 */

const CURRENT_LOAN_STATE_FILE = 'test-current-loans-counter';
$filePath = dirname(__FILE__).'/'.CURRENT_LOAN_STATE_FILE;
$currentLoansCounter = fopen($filePath, 'w+');

if ($currentLoansCounter === FALSE) {
    die('Configuration file/s not found');
}

if (is_writable($filePath)) {
    fwrite($currentLoansCounter, 0);
} else {
    fclose($currentLoansCounter);
    die('Error: File \'current-loans-state\' is not writable.');
}
fclose($currentLoansCounter);
echo "OK";die();

//require_once dirname(__FILE__) . '/../stories/db-config.php';
//$servername = "localhost";
//$username = "c12hccnmcl";
//$password = "hpQyhIX_70";
//$dbname = "c12hccnmcl";
//$conn = new mysqli($servername, $username, $password, $dbname);

//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
//}

//$stmt = $conn->prepare("DELETE FROM `fingerprint`");
//$stmt->execute();
//$stmt->close();
//$conn->close();

//echo 'done';
