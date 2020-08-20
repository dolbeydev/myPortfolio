<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['name'];
    $lname = $_POST['subject'];
    $emailfrom = $_POST['email'];
    $subject = $_POST['subject'];

    $mailTo = 'reid@dolbeydev.com';
    $headers = "from: ".$emailfrom;
    $txt = "You have recieved an e-mail from ".$fname.".\n\n".$subject;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>