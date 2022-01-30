<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $reason = isset($_POST['reason']) ? $_POST['reason'] : '';
    echo($name . ' ' . $email);
    
    $header = "From:abc@somedomain.com \r\n";
    $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    if(mail( 'ryan@ryansmeat.com', 'ryansmeat lead', $name, $header ) == true){
        echo('successful email');
    } else {
        echo('error');
    }
}