<?php
/**
 * Created by PhpStorm.
 * User: whj
 * Date: 16/11/4
 * Time: 20:57
 */
$imgInfo = $_FILES['myFileName'];
$oldname = $imgInfo['name'];
$tmp_name = $imgInfo['tmp_name'];
$temp = explode(".",$oldname);
$newname = time().".".$temp[count($temp)-1];
move_uploaded_file($tmp_name,'__PUBLIC__/images/'.$newname);
//echo $dir = "http://".getenv('HTTP_HOST')."/weditor/upload/".$newname;
echo $dir='__ROOT__/Public/images/'.$newname;