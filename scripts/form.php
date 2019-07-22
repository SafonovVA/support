<?php

//Очистка ошибок
error_reporting(0);


//Создание записи в MySQL
require 'connect.php';
$username = trim($_REQUEST['username']);
$departament = trim($_REQUEST['departament']);
$mail = trim($_REQUEST['mail']);
$phone = trim($_REQUEST['phone']);
$problem = trim($_REQUEST['problem']);
$another = trim($_REQUEST['another']);
$regtime = date ('H:i:s');
$regdate = date ('Y.m.d');
$ip = $_SERVER['REMOTE_ADDR'];

$insert_sql = "INSERT INTO `helpdesk`.`support` (`id`, `username`, `departament`, `mail`, `phone`, `problem`, `another`, `regtime`, `regdate`, `ip`, `status`) VALUES ('NULL', '{$username}', '{$departament}', '{$mail}', '{$phone}', '{$problem}', '{$another}', '{$regtime}', '{$regdate}', '{$ip}', 'необработана');";
mysqli_query($con1, $insert_sql);
echo "<center><h1>Ваша заявка принята!</h1></center>";
mysqli_close($con1);


//Отправка копию в электронную почту
require_once 'class.phpmailer.php';
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['formid'] == 'form1')
{
   $mailto = 'support@ps.knb';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Новая заявка';
   $message = 'Заявка от:';
   $success_url = '';
   $error_url = '';
   $error = '';
   $eol = "\n";
   $max_filesize = isset($_POST['filesize']) ? $_POST['filesize'] * 1024 : 1024000;
   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->Host = '10.16.48.16';
   $mail->Port = 25;
   $mail->SMTPAuth = true;
   $mail->Username = 'support@ps.knb';
   $mail->Password = 'Qq123456';
   $mail->Subject = stripslashes($subject);
   $mail->From = $mailfrom;
   $mail->FromName = $mailfrom;
   $mailto_array = explode(",", $mailto);
   for ($i = 0; $i < count($mailto_array); $i++)
   {
      if(trim($mailto_array[$i]) != "")
      {
         $mail->AddAddress($mailto_array[$i], "");
      }
   }
   $mail->AddReplyTo($mailfrom);
   if (!ValidateEmail($mailfrom))
   {
      $error .= "The specified email address is invalid!\n<br>";
   }

   if (!empty($error))
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $error, $errorcode);
      echo $errorcode;
      exit;
   }

   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field");
   $message .= $eol;
   $message .= "IP Address : ";
   $message .= $_SERVER['REMOTE_ADDR'];
   $message .= $eol;
   foreach ($_POST as $key => $value)
   {
      if (!in_array(strtolower($key), $internalfields))
      {
         if (!is_array($value))
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
         }
         else
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
         }
      }
   }
   $mail->CharSet = 'UTF-8';
   if (!empty($_FILES))
   {
       foreach ($_FILES as $key => $value)
       {
          if ($_FILES[$key]['error'] == 0 && $_FILES[$key]['size'] <= $max_filesize)
          {
             $mail->AddAttachment($_FILES[$key]['tmp_name'], $_FILES[$key]['name']);
          }
      }
   }
   $mail->WordWrap = 80;
   $mail->Body = $message;
   if (!$mail->Send())
   {
      die('PHPMailer error: ' . $mail->ErrorInfo);
   }
   header('Location: '.$success_url);
   exit;
}

header("refresh:1; url=http://10.16.48.22/support");
