<?php 
$pg="";
if(isset($_GET["pg"]))
	$pg=$_GET["pg"];
if($pg=="cadastro"){
?>
<?php include "./cadastro.php"?>
<?php }else if($pg=="cotacao"){?>
<?php include "./cadastro.php"?>
<?php }else if($pg=="inicial"){?>
<?php include "./inicial.php"?>
<?php }else{?>
<?php include "./home.php"?>
<?php }?>
