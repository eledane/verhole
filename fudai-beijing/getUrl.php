<?php

$str = file_get_contents('../config/settings.conf');
$arr = unserialize($str);

if ($arr['pause']){
    header('X-PHP-Response-Code: 400', true, 400);
    return -1;
}

$months = filter_input(INPUT_POST,'months');
$price = filter_input(INPUT_POST,'price');
$uuid = filter_input(INPUT_POST, 'uuid');
$referrer = filter_input(INPUT_POST,'referrer');
$url = filter_input(INPUT_POST,'url');
$http_referer = filter_input(INPUT_SERVER,'HTTP_REFERER');

$servername = "localhost";
$username = "c12hccnmcl";
$password = "hpQyhIX_70";
$dbname = "c12hccnmcl";

/*$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "c12hccnmcl";*/

if (!is_numeric($months) || !is_numeric($price) || $months < 1 || $months > 6 || $price  < 1 || $price > 500){
    header('X-PHP-Response-Code: 400', true, 400);
    return -1;
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


switch ($months){
    case '1': $productCode = "FCWLMINI008";break;
    case '2': $productCode = "FCWLMINI009";break;
    case '3': $productCode = "FCWLMINI010";break;
    case '4': $productCode = "FCWLMINI011";break;
    case '5': $productCode = "FCWLMINI012";break;
    case '6': $productCode = "FCWLMINI013";break;
}

if (strpos($_SERVER['HTTP_REFERER'], 'hc-cn-mcl.utdigit.com') !== FALSE){
    //$productCode .= 'T';
    $sellerCode = "062528";
    $data = array(
        'loanData' => array(
            'eShopID' => array (
                'productCode' => $productCode,
                "sellerCode" => $sellerCode
            ),
            'technical' => array(
                "returnURL" => $http_referer
            ),
            'loanAmount' => $price,
            'uuid' => $uuid,
            'source_referrer' => $referrer,
            'affiliate' => $url
        )
    );
    //var_dump($data);die;
}else{
    $sellerCode = "062528";
    //$data = array('loanData' => array('eShopID' => array ('productCode' => $productCode, "sellerCode" => $sellerCode), 'technical' => array("returnURL" => $http_referer), 'loanAmount' => $price));

    $data = array(
        'loanData' => array(
            'eShopID' => array (
                'productCode' => $productCode,
                "sellerCode" => $sellerCode
            ),
            'technical' => array(
                "returnURL" => $http_referer
            ),
            'loanAmount' => $price,
            'uuid' => $uuid,
            'source_referrer' => $referrer,
            'affiliate' => $url
        )
    );
}

$ret['data'] = $data;
$ret['productCode'] = $productCode;

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'Encrypter.php');
$encrypter = new Encrypter('1234567890ABCDEF', 'hq84ui1x');
$ret['hash'] = $encrypter->encrypt(json_encode($data['loanData']));
//$ret['hash'] = shell_exec("java -jar ./lib/mlc.jar '".json_encode($data['loanData'])."'");
//$ret['hash'] = trim(preg_replace('/\s\s+/', '', $ret['hash']));
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
