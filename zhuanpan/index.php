<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/2/28
 * Time: 17:01
 */
$category = 3;
$lucknum = 0;

$probability = array(
  10,20,30,
);

$pricename = array(
    'third price',
    'second price',
    'first price',
);

$pricecode = array(//返回前端中奖图片的序号
    3, //三等奖图片序号，也可以是6
    2, //二等奖图片序号，也可以是7
    1, //一等奖图片序号，也可以是4
);

$caterandom = mt_rand(0,$category-1);//使得中三种奖项的概率为三分之一

$random = mt_rand(0,$probability[$caterandom]);

if ($random == $lucknum){
    $data = array(
      $pricename[$caterandom],
      $pricecode[$caterandom],
    );
    echo json_encode($data);//以json格式返回给前端js
}else{
    $data = array(
      'Thank You!',
        5,
    );
    echo json_encode($data);
}

?>