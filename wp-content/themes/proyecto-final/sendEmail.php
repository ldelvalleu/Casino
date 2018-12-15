<?php 
    if(isset($POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = 'ldelvalleu@ucenfotec.ac.cr';
        $headers = "From: ".$mailFrom;
        $txt = 'Message from: '.$mailFrom.'\n\n'.$message;


        mail($mailTo, $subject, $txt, $headers);

    }
?>