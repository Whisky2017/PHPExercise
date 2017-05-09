<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/3/16
 * Time: 10:34
 */
function db_connect(){
    $result = mysqli_connect('localhost','wskyt','1234','book_sc');
    if (!$result){
        return false;
    }
    $result->autocommit(TRUE);
    return $result;
}

function db_result_to_array($result){
    $res_array= array();
    for ($count = 0;$row = mysqli_fetch_assoc($result);$count++){
        $res_array[$count] = $row;
    }
    return $res_array;
}