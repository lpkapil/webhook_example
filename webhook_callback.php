<?php
$entityBody = file_get_contents('php://input');
$data = json_decode(utf8_encode($entityBody));

if (json_last_error()) {
    $error = "JSON parsing error: " . json_last_error();
    print $error;
    // To-do Add some logging for errors
    return;
}

print_r($data);

// Process data recived from webhook
?>