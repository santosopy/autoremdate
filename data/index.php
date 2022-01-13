<?php
    $POST = json_decode(file_get_contents("php://input"), true);
    $date = date("Y.m.d", strtotime($POST["date"]));
    $currentDate = date("Y.m.d");
    if( $currentDate > $date){
        $html=file_get_contents("./info.html");
        file_put_contents( "./info.html","<!-- {$html} -->" );
    }
    else{
        echo "display";
    }
    // echo json_encode($POST);
    exit();
?>