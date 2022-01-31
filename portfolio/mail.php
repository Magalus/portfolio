<?php
  if (isset($_POST)) {
      $data = json_decode(file_get_contents('php://input'), true);
  }

  if (isset($data['name'])) {
    $name = $data['name'];
  }

  if (isset($data['number'])) {
    $number = $data['number'];
  } else {
    $number = "Non renseigné";
  }
  
  if (isset($data['mail'])) {
    $mail = $data['mail'];
  }

  if (isset($data['subject'])) {
    $subject = $data['subject'];
  } else {
    $subject = "Non renseigné";
  }
  
  if (isset($data['message'])) {
    $message = nl2br($data['message']);
  }

  $from = "portfolio@maelvidament.com";
  $to = "mael.vidament@gmail.com";

  $mail_Data = "";
  $mail_Data .= "<html> \n";
  $mail_Data .= "<head> \n";
  $mail_Data .= "<title> Subject </title> \n";
  $mail_Data .= "</head> \n";
  $mail_Data .= "<body> \n";

  $mail_Data .= "$message<br> \n";
  $mail_Data .= "<br> \n";
  $mail_Data .= "Nom : <b>$name</b><br> \n";
  $mail_Data .= "Téléphone : <b>$number</b><br> \n";
  $mail_Data .= "Mail : <b>$mail</b><br> \n";

  $mail_Data .= "</body> \n";
  $mail_Data .= "</HTML> \n";

  $headers  = "MIME-Version: 1.0 \n";
  $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
  $headers .= "From: $from  \n";
  $headers .= "Disposition-Notification-To: $from  \n";
  $headers .= "X-Priority: 1  \n";
  $headers .= "X-MSMail-Priority: High \n";

  mail($to, $subject, $mail_Data, $headers);
?>