<?php
/*
FreeEmailEncrypter - Rolandfarkas.com

Simple Free Email Encrypter to 

MIT License

FreeEmailEncrypter Copyright (c) [2018] [Roland Farkas]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

FreeEmailEncrypter v1.0

░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
████████████████████████████████
██▄░░░░░░░░░░░░░░░░░░░░░░░░░░▄██
████▄░░░░░░░░░░░░░░░░░░░░░░▄████
██░▀██▄░░░░░░░░░░░░░░░░░░▄██▀░██
██░░░▀██▄░░░░░░░░░░░░░░▄██▀░░░██
██░░░░░▀██▄░░░░░░░░░░▄██▀░░░░░██
██░░░░░░░▀██▄░░░░░░▄███░░░░░░░██
██░░░░░░▄██▀██▄░░▄██▀▀██▄░░░░░██
██░░░░▄██▀░░░▀████▀░░░░▀██▄░░░██
██░░▄██▀░░░░░░░░░░░░░░░░░▀██▄░██
██▄██▀░░░░░░░░░░░░░░░░░░░░░▀████
███▀░░░░░░░░░░░░░░░░░░░░░░░░░▀██
██▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█
▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

Require:

**PHPMailer
**PHP 7.2+
**LAMP/LEMP/WAMP


For Debugging Purposes:

error_reporting(E_ALL);
ini_set('display_errors', true);

*/
$auth_token = $_GET['auth_token'];
if($_GET['auth_token'] == ""){
    $auth_token = $_POST['auth_token'];
}
$content = $_GET['content'];
if($_GET['content'] == ""){
    $content = $_POST['content'];
}
$emailto = $_GET['emailto'];
if($_GET['emailto'] == ""){
    $emailto = $_POST['emailto'];
}
$cc_email = $_GET['cc_email'];
if($_GET['cc_email'] == ""){
    $cc_email = $_POST['cc_email'];
}
$subject = $_GET['subject'];
if($_GET['subject'] == ""){
    $subject = $_POST['subject'];
}
$rnumber = mt_rand(100000, 999999);
if($auth_token == "bda551237686655107c8c350e38a2ee1") {
        if(!filter_var($emailto, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please enter a valid E-mail Address (Please check for spaces.)";
        echo $error_message;
    }elseif($content == ""){
        $error_message = "Please add content to send";
        echo $error_message;
    }else{ 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message = clean_string($content)."\n";
    
    $Filename_md5 = md5($emailto);   
    $Filename = $Filename_md5.".txt";
    $output = shell_exec('touch '.$Filename);
    echo $output;
    $myfile = fopen($Filename, "w") or die("Unable to open file!");
    fwrite($myfile, $email_message);
    fclose($myfile);
    function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
    }   
    $randomPassword = randomPassword();      if(!filter_var($emailto, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Please enter a valid E-mail Address (Please check for spaces.)";
        echo $error_message;
    }elseif($content == ""){
        $error_message = "Please add content to send";
        echo $error_message;
    }else{ 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_message = clean_string($content)."\n";
    
    $Filename_md5 = md5($emailto);   
    $Filename = $Filename_md5.".txt";
    //Folder Name:  pd-X7yG0gEW1
    $output = shell_exec('touch '.$Filename);
    echo $output;
    $myfile = fopen($Filename, "w") or die("Unable to open file!");
    fwrite($myfile, $email_message);
    fclose($myfile);
    function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
    }   
    $randomPassword = randomPassword();
$zip = new ZipArchive();

$zipFile = __DIR__ . '/securedcontent.zip';
if (file_exists($zipFile)) {
    unlink($zipFile);
}

$zipStatus = $zip->open($zipFile, ZipArchive::CREATE);
if ($zipStatus !== true) {
    throw new RuntimeException(sprintf('Failed to create zip archive. (Status code: %s)', $zipStatus));
}
if (!$zip->setPassword($randomPassword)) {
    throw new RuntimeException('Set password failed');
}
// compress file
$baseName = basename($Filename);
if (!$zip->addFile($Filename, $baseName)) {
    throw new RuntimeException(sprintf('Add file failed: %s', $Filename));
}
// encrypt the file with AES-256
if (!$zip->setEncryptionName($baseName, ZipArchive::EM_AES_256)) {
    throw new RuntimeException(sprintf('Set encryption failed: %s', $baseName));
}
$zip->close();
        if($subject == "") {
            $subject_line = $rnumber;
        }else {
            $subject_line = $subject;
        }
    
/*
Require PHPMailer
*/
require '/vendor/phpmailer/phpmailer/src/Exception.php';
require '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/vendor/phpmailer/phpmailer/src/SMTP.php';
        
// Email Function
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->FromName  = $websiteurl;
    
    $mail->addAddress($emailto);
        
    //Server settings (Hpst,Username,Password)
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'Host';                                 // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'Username';                         // SMTP username
    $mail->Password = 'Password';                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients (Email,Name)
    $mail->setFrom('Email', 'Name');
     $mail->addAddress($emailto);
    $mail->AddAddress($cc_email); 

    //Attachments
    $mail->addAttachment('securedcontent.zip');         // Add attachments

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject   = "Secure Email - " .$subject_line;
    $mail->Body    = "Password to follow";
    $mail->AltBody = "Password to follow";
    $mail->send();
    $mail->ClearAllRecipients();
    $mail->clearAttachments();    
    $mail->Body    = $randomPassword;
    $mail->AltBody = $randomPassword;
    $mail->Subject   = "Secure Email Password - " .$subject_line;
    $mail->addAddress($emailto);
    $mail->AddAddress($cc_email); 
    $mail->Send();
$success_message = "Your Request Sent Successfully";
unlink($Filename);
unlink('securedcontent.zip');
header('Location: success/');
    }
if(isset($_SESSION['error_message'])) { 
  echo $error_message;
}
}
else {
    echo "Unauthorized Access";
}
?>
