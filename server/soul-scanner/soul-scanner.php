<?php
    include '../serverSettings.php';
    include '../serverHelper.php';
    include 'responses.php';

    global $debug;
    global $langPriority;


    if($debug){
        error_reporting(E_ALL);
    }

    function push($text, $code){
        if(isset($_GET['type'])){
            if($_GET['type'] == 'code'){
                return $code;
            }
            else{
                return $text;
            }
        }
        else{
            return $text;
        }
    }

    echo getApprString(2, $langPriority);


?>