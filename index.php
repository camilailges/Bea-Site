<?php
    error_reporting(false);

    $header = file_get_contents("partials/header.html");
    $footer = file_get_contents("partials/footer.html");
    $body = file_get_contents("views" . $_SERVER["QUERY_STRING"] . "/index.php");
    if($body){
        echo $header;
        echo $body;
        echo $footer;
    }else{
        http_response_code(404);
        die();
    }

?>