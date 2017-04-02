<?php

$str = file_get_contents('../config/settings.conf');
$arr = unserialize($str);

if ($arr['pause']){
    header('X-PHP-Response-Code: 400', true, 400);
    return -1;
}

$months = filter_input(INPUT_POST,'months',FILTER_SANITIZE_NUMBER_INT);
$price = filter_input(INPUT_POST,'price',FILTER_SANITIZE_NUMBER_INT);
$uuid = filter_input(INPUT_POST, 'uuid',FILTER_SANITIZE_STRING);
$referrer = filter_input(INPUT_POST,'referrer',FILTER_SANITIZE_URL);
$url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
$http_referer = filter_input(INPUT_SERVER,'HTTP_REFERER',FILTER_SANITIZE_URL);

if (!is_numeric($months) || !is_numeric($price) || $months < 1 || $months > 6 || $price  < 1 || $price > 500){
    header('X-PHP-Response-Code: 400', true, 400);
    return -1;
}

//require_once dirname(__FILE__) . '/../stories/db-config.php';
$servername = "localhost";
$username = "c12hccnmcl";
$password = "hpQyhIX_70";
$dbname = "c12hccnmcl";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$servername = "localhost";
$username = "c12hccnmcl";
$password = "hpQyhIX_70";
$dbname = "c12hccnmcl";

$fingerprint = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'fingerprint', FILTER_SANITIZE_STRING));
$stmt = $conn->prepare("SELECT count(*) FROM `fingerprint` WHERE `hash` = ? AND `used` = 0");
$stmt->bind_param("s", $fingerprint);
$stmt->bind_result($result);
$stmt->execute();
$stmt->fetch();
$stmt->close();


if ($result > 0) {
    $stmt2 = $conn->prepare("UPDATE `fingerprint` SET `used` = 1 WHERE `hash` = ?");
    setcookie('clicked', null, -1);
    $stmt2->bind_param("s", $fingerprint);
    $stmt2->execute();
    $stmt2->close();

    switch ($months) {
        case '1':
            $productCode = "FCWLMINI014";
            break;
        case '2':
            $productCode = "FCWLMINI015";
            break;
        case '3':
            $productCode = "FCWLMINI016";
            break;
        case '4':
            $productCode = "FCWLMINI017";
            break;
        case '5':
            $productCode = "FCWLMINI018";
            break;
        case '6':
            $productCode = "FCWLMINI019";
            break;
    }
} else {
    switch ($months) {
        case '1':
            $productCode = "FCWLMINI008";
            break;
        case '2':
            $productCode = "FCWLMINI009";
            break;
        case '3':
            $productCode = "FCWLMINI010";
            break;
        case '4':
            $productCode = "FCWLMINI011";
            break;
        case '5':
            $productCode = "FCWLMINI012";
            break;
        case '6':
            $productCode = "FCWLMINI013";
            break;
    }
}

setcookie('lastProductCode', $productCode, time() + (86400 * 30));

if (strpos($_SERVER['HTTP_REFERER'], 'hc-cn-mcl.utdigit.com') !== FALSE || strpos($_SERVER['HTTP_REFERER'], 'fudai.homecredit.cn') !== FALSE){
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