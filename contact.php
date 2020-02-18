<?php 
if(isset($_POST['submit'])){
    $to = "mapitso.moshoeshoe@umuzi.org"; 
    $from = $_POST['email']; 
    $first_name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['e-mail'];
    $number = $_POST['number'];
    $checkbox = $GET['checkbox'];
    $name = $GET['province'];
    $name = $GET['dealers'];
    $message = $first_name . " " . $last_name . " " . $email . " " . $number . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$first_name,$last_name,$email, $number,$message,$headers);
    header("Location: thankyou_page.html");


?>

