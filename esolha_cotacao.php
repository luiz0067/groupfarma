	
	<form method="get">
		<input type="hidden" name="pg" value="<?php if(isset($_GET["pg"])){echo $_GET["pg"];}?>">
		<input type="hidden" name="menu" value="<?php if(isset($_GET["menu"])){echo $_GET["menu"];}?>">
		<input type="hidden" name="tipo" id="tipo" value="<?php if(isset($_GET["menu"])){echo $_GET["menu"];}?>">
		<div class="centro" style="width:220px;">
			<input type=button class=bottao style="width:100px;float:left;" onmouseover="this.style.backgroundColor='#1071bc'" onmouseout="this.style.backgroundColor='#45a8fd'" value="Farmácias" onclick="escolhatipo('farmacia',this)"/>
			<div class="espaco_campo"></div>
			<input type=button class=bottao style="width:110px;float:left;" onmouseover="this.style.backgroundColor='#1071bc'" onmouseout="this.style.backgroundColor='#45a8fd'" value="Distribuidores" onclick="escolhatipo('distribuidores',this)"/>
		</div>
	</form>
