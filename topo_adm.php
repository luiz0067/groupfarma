<div class="inicial_buscar">
	<form method="post">
		<div class="esquerda">				
			<div id="inicial_texto_buscar" onclick="enviar_foco('inicial_buscar_caixa_texto')">Buscar produto</div>
			<input type="text" id="inicial_buscar_caixa_texto" name="buscar" onfocus="entrar_campo_buscar('inicial_texto_buscar')" onblur="sair_campo_buscar('inicial_texto_buscar',this)">
		</div>
		<div class="esquerda"><input type="image" name="acao" src="./img/buscar.png"></div>
		<div class="esquerda" style="width:330px;color:white;">					
			<div class="direita">
				<a href="#" style="color:white;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#FFF'">Configurações de conta</a>
				 | 
				<a href="#" style="color:white;" onmouseover="this.style.color='red'" onmouseout="this.style.color='#FFF'">Sair</a>
			</div>
		</div>
	</form>
</div>