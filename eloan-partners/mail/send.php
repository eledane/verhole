<?php
session_start();
header ('Content-type: text/html; charset=utf-8');
require dirname(__FILE__) . '/PHPMailer/PHPMailerAutoload.php';
include_once dirname(__FILE__) . '/../securimage/securimage.php';
$securimage = new Securimage();
$captcha_code = $_POST['captcha'];
$options      = array();


if ($securimage->check($captcha_code) == true) {

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    // SMTP settings
    //$mail->isSMTP();
    //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    //$mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = 'user@example.com';                 // SMTP username
    //$mail->Password = 'secret';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //$mail->Port = 587;                                    // TCP port to connect to


    $mail->isMail();
    $mail->Host = 'smtp.163.com';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '13410018145@163.com';                 // SMTP username
    $mail->Password = 'hccdev1qaz';
    $mail->Port = 25; 
    $mail->setFrom('noreply@homecredit.cn', 'HC CN Partner web contact form');   //noreply@hc-cn-partner.utdigit.com
    //$mail->addAddress('onlinetestHCC@hotmail.com', 'Online Test');//online.sales@homecredit.cn
    $mail->addAddress('online.sales@homecredit.cn', 'Online Sales');
    $mail->CharSet = 'UTF-8';
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $partnerName = filter_input(INPUT_POST,'partner-name',FILTER_SANITIZE_STRING);
    $url = filter_input(INPUT_POST,'URL',FILTER_SANITIZE_URL);
    $province = filter_input(INPUT_POST,'province',FILTER_SANITIZE_STRING);
    $contactPersonName = filter_input(INPUT_POST,'contact-person-name',FILTER_SANITIZE_STRING);
    $contactPersonPhone = filter_input(INPUT_POST,'contact-person-phone',FILTER_SANITIZE_STRING);
    $dailySales = filter_input(INPUT_POST,'daily-sales',FILTER_SANITIZE_STRING);
    $dailyVisitors = filter_input(INPUT_POST,'daily-visitors',FILTER_SANITIZE_STRING);
    $averagePrice = filter_input(INPUT_POST,'average-price',FILTER_SANITIZE_STRING);
    $additionalMessage = filter_input(INPUT_POST,'additional-message',FILTER_SANITIZE_STRING);
    $verificationCode = filter_input(INPUT_POST,'captcha',FILTER_SANITIZE_STRING);


    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING);
    $businessType = filter_input(INPUT_POST,'business-type',FILTER_SANITIZE_STRING);
    $businessPlatform = filter_input(INPUT_POST,'business-platform',FILTER_SANITIZE_STRING);
    $port = filter_input(INPUT_POST,'port',FILTER_SANITIZE_STRING);
    $supportedOs = filter_input(INPUT_POST,'supported-os',FILTER_SANITIZE_STRING);
    $sitePv = filter_input(INPUT_POST,'site-pv',FILTER_SANITIZE_STRING);

    $mail->isHTML(true);                                  // Set email format to HTML

    $body =
       "<div class='container'>".
        "    Hi Team, <br /> <br />".
        "</div>".
        "<table align='center' width='80%' style='text-align: center; border: 1px solid #9cbdcc;' cellpadding='0' cellspacing='0'>".
        "    <thead>".
        "        <tr>".
        "            <th width='30%' style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Item</th>".
        "            <th width='69%' style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Content</th>".
        "        </tr>".
        "    </thead>".
        "    <tbody>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Partner Name</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$partnerName}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Province</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$province}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Business Type</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$businessType}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Current Business Platform</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$businessPlatform}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Contact Person</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$contactPersonName}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Contact Email</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$email}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Contact Person Title</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$title}</td></tr>".
         "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Contact Phone</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$contactPersonPhone}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Website/App Name</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$url}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Website Port</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$url}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Supported Mobile OS</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$supportedOs}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Site PV</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$sitePv}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Daily Sale</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$dailySales}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Daily Visitors</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$dailyVisitors}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Average Price</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$averagePrice}</td></tr>".
        "        <tr><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>Verification Code</td><td style='text-align: center; border-bottom: 1px solid #9cbdcc;'>{$verificationCode}</td></tr>".
        "        <tr><td style='text-align: center;'>Additional Message</td><td style='text-align: center;'>{$additionalMessage}</td></tr>".
        "    </tbody>".
        "</table>".
        "<br /> <br />".
        "<div class='container' style='padding: 30px 50px; text-align: right;'>".
        "    <strong>HC CN Partner Web Contact Form</strong>".
        "</div>";

    $mail->Subject = 'HC CN Contact form';
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    if(!$mail->send()) {
        echo '抱歉，您的信息未能发送成功，请再试一次。'; 
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("Location: ../index.php?formsent#form");
        echo 'Thanks for filling up the form.';
    }
} else {
    echo '抱歉，您的信息未能发送成功，请再试一次。'; 
}




