<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/3/30
 * Time: 15:40
 */
    error_reporting(E_ALL^E_NOTICE);

    include ("book_sc_fns.php");
    session_start();

    $isbn  = $_GET['isbn'];
    $book = get_book_details($isbn);
    do_html_header($book['title']);
    display_book_details($book);

    if(check_admin_user()) {
        display_button("edit_book_form.php?isbn=".$isbn, "edit-item", "Edit Item");
        display_button("admin.php", "admin-menu", "Admin Menu");
        display_button($target, "continue", "Continue");
    } else {
        display_button("show_cart.php?new=".$isbn, "add-to-cart",
            "Add".$book['title']." To My Shopping Cart");
        display_button($target, "continue-shopping", "Continue Shopping");
    }

    do_html_footer();

