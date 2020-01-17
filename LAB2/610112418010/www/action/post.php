<?php

$sport = $_POST['sl_sport']?$_POST['sl_sport']:$_GET['getSport'];
cal_sport($sport);

function cal_sport($sport){
    switch ($sport){
        case "1" :
            $sport = "football";
            break;
        case "2" :
            $sport = "tenis";
            break;
        default:
            $sport = "Out of type.";
    }
    echo $sport;
};

?>