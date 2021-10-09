<div class="cadastro_produto_titulo">
	<font face="TahomaNegreta">Painel de Cotações</font>
</div>
<div class="linha" style="height:20px"></div>
<div class="linha">
	
	<form method="get">
		<input type="hidden" name="pg" value="<?php if(isset($_GET["inicial"])){echo $_GET["inicial"];}?>">
		<input type="hidden" name="menu" value="<?php if(isset($_POST["menu"])){echo $_POST["menu"];}?>">
		<div class="centro" style="width:220px;">
			<input type=submit name=acao name=tipo class=bottao style="width:100px;float:left;" onmouseover="this.style.backgroundColor='#1071bc'" onmouseout="this.style.backgroundColor='#45a8fd'" value="Farmácias"/>
			<div class="espaco_campo"></div>
			<input type=submit name=acao name=tipo class=bottao style="width:110px;float:left;" onmouseover="this.style.backgroundColor='#1071bc'" onmouseout="this.style.backgroundColor='#45a8fd'" value="Distribuidores"/>
		</div>
	</form>

</div>
<div class="linha" style="height:10px"></div>
<div class="risco_azul"></div>