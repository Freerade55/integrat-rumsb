<?php
//
////// логи
//
function logs($webhook_data)

{


    if (file_exists(ROOT . "/logs/log.json")) {
        $log = file_get_contents(ROOT . "/logs/log.json");
        $log = json_decode($log, true);
    } else {
        $log = [];
    }

    $t = explode(" ",microtime());
    $log[date("Y-m-d H:i:s", $t[1]).substr((string)$t[0],1,4)] = $webhook_data;
    $log = json_encode($log, JSON_UNESCAPED_UNICODE);
    file_put_contents(ROOT . "/logs/log.json", $log);
}



function leadAdd()

{


    if (file_exists(ROOT . "/logs/addedLeads.json")) {
        $log = file_get_contents(ROOT . "/logs/addedLeads.json");
        $log = json_decode($log, true);
    } else {
        $log = [];
    }

    $t = explode(" ",microtime());
    $log[date("Y-m-d H:i:s", $t[1]).substr((string)$t[0],1,4)] = $_REQUEST;
    $log = json_encode($log, JSON_UNESCAPED_UNICODE);
    file_put_contents(ROOT . "/logs/addedLeads.json", $log);
}




function companyChange()

{


    if (file_exists(ROOT . "/logs/companyChange.json")) {
        $log = file_get_contents(ROOT . "/logs/companyChange.json");
        $log = json_decode($log, true);
    } else {
        $log = [];
    }

    $t = explode(" ",microtime());
    $log[date("Y-m-d H:i:s", $t[1]).substr((string)$t[0],1,4)] = $_REQUEST;
    $log = json_encode($log, JSON_UNESCAPED_UNICODE);
    file_put_contents(ROOT . "/logs/companyChange.json", $log);
}





