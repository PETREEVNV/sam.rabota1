<?php
  if($_POST['capcha'] != 56){
    header('location: index.php');
    exit;
  }

  if($_POST['subject'] == 1){
    $subject = "Вопрос по уроку";
  } else if($_POST['subject'] == 2){
    $subject = "Личный вопрос";
  } else if($_POST['subject'] == 3){
    $subject = "Благодарность";
  } else {
    $subject = "Вопрос по уроку";
  }

  $to = "nikolaipetreev@mail.ru";
  $from = trim($_POST['email']);

  $message = htmlspecialchars($_POST['message']);
  $message = urldecode($message);
  $message = trim($massage);

  $headers = "From: $from" . "\r\n" . "Replay-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();

  if(mail($to, $subject, $massage, $headers))
  {
    echo "Письмо отправлено";
  } else {
    echo "Письмо не отправлено";
  }
?>