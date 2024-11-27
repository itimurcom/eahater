<?
function _visitors_count(){
    global $_USER;

    $action = itViewed::looked(0,0,0);


    $request = itMySQL::_request("SELECT COUNT(*) as count FROM `ea_views` WHERE `object`='0' AND `object_id`='0'");

    // return print_rr($_USER);
    return $request[0]['count'];
    }
?>