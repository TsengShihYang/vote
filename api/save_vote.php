<?php

include_once "db_t.php";
$opt_id=$_POST['opt'];
$opt=find("options",$opt_id);

$opt['count']=$opt['count']+1;

update('options',['count'=>$opt['count']],['id'=>$opt_id]);

// header("location:../index.php?do=vote_result");
to("../index.php?do=vote_result");
?>
