<div class="cadastro_produto_titulo">
	<font face="TahomaNegreta">Cotacões Respondidas</font>
</div>
<div class="linha" style="height:20px"></div>
<div class="linha">
	<?php 
		$tipo="";
		if(isset($_GET["tipo"])){
			$tipo=$_GET["tipo"];
		}
		if($tipo==""){
	?>
	<?php include "./esolha_cotacao.php"?>
	<?php }
	else{?>
		
		<input type="text" name="coisa">
		
	<?php }?>
</div>
<div class="linha" style="height:10px"></div>
<div class="risco_azul"></div>