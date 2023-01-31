<?php
    error_reporting(false);

    $header = file_get_contents("partials/header.html");
    $footer = file_get_contents("partials/footer.html");
    $bodyFile = "views" . $_SERVER["QUERY_STRING"] . "/index.php";
    if(is_file($bodyFile)){
        echo $header;
        include $bodyFile;
        echo $footer;
    }else{
        http_response_code(404);
        die();
    }

?>