<?php
$months = filter_input(INPUT_POST,'months');
$price = filter_input(INPUT_POST,'price');
$http_referer = filter_input(INPUT_SERVER,'HTTP_REFERER');

$servername = "127.0.0.1";
$username = "c12hccnmcl";
$password = "hpQyhIX_70";
$dbname = "c12hccnmcl";   

if (!is_numeric($months) || !is_numeric($price) || $months < 1 || $months > 6 || $price  < 1 || $price > 500){
    header('X-PHP-Response-Code: 400', true, 400);
    return -1;
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$data = array('loanData' => array('eShopID' => array ('productCode' => "FCWLMINI00".$months, "sellerCode" => "062524"), 'technical' => array("returnURL" => $http_referer), 'loanAmount' => $price));

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'Encrypter.php');
$encrypter = new Encrypter('1234567890ABCDEF', 'hq84ui1x');
$ret['hash'] = $encrypter->encrypt(json_encode($data['loanData']));
//$ret['hash'] = shell_exec("java -jar ./lib/mlc.jar '".json_encode($data['loanData'])."'");

$dataMysqli = $conn->real_escape_string($ret['hash']);
//$sql = "INSERT INTO mcl_ecommerce_transactions (hash)
//        VALUES ('".$dataMysqli."')";

$stmt = $conn->prepare("INSERT INTO mcl_ecommerce_transactions (hash)
        VALUES (?)");

$stmt->bind_param("s", $dataMysqli);

if ($stmt->execute() === TRUE) {
    $ret['id'] = $stmt->insert_id;    
} else {
    $stmt->close();
    $conn->close();
    die("Error: " . $sql . "<br>" . $conn->error);
}

$stmt->close();
$conn->close();

echo json_encode($ret);

?>
