<?php
if (isset($_POST["submit"])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message']; 

$to = "ffffactoryy@gmail.com";
$subject = "site message";
$body = "此為系統發信，請勿回覆" .$message;

mail ($to,$subject,$body);

if(mail($to,$subject,$body)) {
echo "郵件已寄出!\n";
} else {
echo "郵件寄送失敗!\n";}}
?>


