<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/3/16
 * Time: 10:34
 */

function check_admin_user(){
    if (isset($_SESSION['admin_user'])){
        return true;
    }else{
        return false;
    }
}