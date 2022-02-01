<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $reason = isset($_POST['reason']) ? $_POST['reason'] : '';
    echo('<strong>Name: </strong>' . $name . '<br/><strong>Email: </strong>' . $email . '<br/><strong>Phone: </strong>' . $phone . '<br/><strong>Comments: </strong>' . $reason);
    if(strpos(strtoupper($reason), 'HTTP') === false){
    $payload = ('<strong>Name: </strong>' . $name . '<br/><strong>Email: </strong>' . $email . '<br/><strong>Phone: </strong>' . $phone . '<br/><strong>Comments: </strong>' . $reason);
  
    $header = "From: noreply@ryansmeat.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    if(mail( 'ryan@ryansmeat.com', 'ryansmeat lead', $payload, $header ) == true){
        echo('<h1>Email successfully sent</h1>');
        header('Location: '.'/');
    } else {
        echo('error');
    }
} else {
header('Location: ' . '/error');
}
}
?>
