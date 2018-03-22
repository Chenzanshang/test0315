<?php
echo "^_^";
$a=$_GET['aaa'];
$b=$_GET['bbb'];
$c=$a+$b;

if( !isset($_GET['aaa'])||!isset($_GET['aaa']) ){
	echo"乖乖設定ab";
}else{
	echo $c;
}
