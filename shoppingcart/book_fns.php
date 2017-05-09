<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/3/16
 * Time: 10:28
 */
function get_categories(){
    $conn = db_connect();
    $query = "select catid,catname from categories";
    $result = $conn->query($query);
    if (!$result){
        return false;
    }
    $num_cats = $result->num_rows;
    if (!$num_cats){
        return false;
    }
    $result = db_result_to_array($result);
    return $result;

}

function get_category_name($catid){
    $conn = db_connect();
    $query = "select catname from categories where catid = '".$catid."'";
    $result = $conn->query($query);
    if (!$result){
        return false;
    }
    $num_cats = @$result->num_rows;
    if ($num_cats == 0){
        return false;
    }
    $row = $result->fetch_object();
    return $row->catname;
}

function get_books($catid){
    if (($catid == '') || (!$catid)){
        return false;
    }
    $conn = db_connect();
    $query = "select * from books where catid = '".$catid."'";
    $result = $conn->query($query);
    if (!$result){
        return false;
    }
    $num_books = @$result->num_rows;
    if ($num_books == 0){
        return false;
    }
    $result = db_result_to_array($result);
    return $result;
}

function get_book_details($isbn){
    if ((!$isbn) || ($isbn=='')) {
        return false;
    }
    $conn = db_connect();
    $query = "select * from books where isbn='".$isbn."'";
    $result = @$conn->query($query);
    if (!$result) {
        return false;
    }
    $result = @$result->fetch_assoc();
    return $result;
}