<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message']; 

$to = "ffffactoryy@gmail.com";
$subject = "site message";
$body = "此為系統發信，請勿回覆";

mail ($to,$subject,$body);

echo "訊息已送出！\n\n $request";

?>


