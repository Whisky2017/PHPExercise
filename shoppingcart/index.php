<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/3/16
 * Time: 10:24
 */
//应用程序的包含文件集合

error_reporting(E_ALL^E_NOTICE);

include ('book_sc_fns.php');
session_start();//开始会话
do_html_header("Welcome to Book_O_Rama");

echo "<p>Please choose a category:</p>";
//获取数据库数据
$cat_array = get_categories();
//display
display_categories($cat_array);

if (isset($_SESSION['admin_user'])){
    display_button("admin.php","admin-menu","Admin Menu");
}

do_html_footer();

?>