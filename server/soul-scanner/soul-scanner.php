<?php
    include '../serverSettings.php';
    include '../serverHelper.php';
    include 'responses.php';

    global $debug;
    global $langPriority;


    if($debug){
        error_reporting(E_ALL);
    }

    function push($code){
        if(isset($_GET['type'])){
            if($_GET['type'] == 'code'){
                return $code[0];
            }
            else{
                return $code[1];
            }
        }
        else{
            return $code[0];
        }
    }

    // 255 = random
    echo getApprString(255, $langPriority)[0];


?>