<div class="linha">
	<div class="centropagina">
		<?php include "./topo_adm.php"?>
		<?php include "./menu.php"?>
		<div class="inical_meio">
			<div class="inical_meio_topo">
				<div class="linha">
					<div class="inical_logo"><img src="./img/logo.jpg" width="" height=""></div>
					<div class="inicial_mensagem_pedido">Bom dia você tem <?php echo 20;?> pedidos de cotações</div>
				</div>
				<div class="linha">
					<div class="inicial_contato_topo">
						<?php echo "www.medley.com.br"?><br>
						<?php echo "0800-704-3876"?><br>
					</div>
				</div>
			</div>
			<div class="incial_noticias_fundo" id="incial_noticias_fundo">
				<div class="incial_noticias">
					<div class="incial_noticias" id="incial_noticias">
						<?php 
						$menu="";
						if(isset($_GET["menu"]))
							$menu=$_GET["menu"];
							if($menu=="cadastro_produtos"){
						?>
						<?php include "./cadastro_produtos.php"?>
						<?php
							}
							else if($menu=="editar_produtos"){
						?>
						<?php include "./editar_produtos.php" ?>
						<?php 
							}
							else if($menu=="excluir_produtos"){
						?>
						<?php include "./excluir_produtos.php" ?>
						<?php 
							}
							else if($menu=="responder_cotacoes"){?>
						<?php include "./responder_cotacoes.php" ?>
						<?php 
							}
							else if($menu=="cotacoes_respondidas"){?>
						<?php include "./cotacoes_respondidas.php" ?>
						<?php 
							}
							else if($menu=="vendas_cotacoes"){?>
						<?php include "./vendas_cotacoes.php" ?>
						<?php 
							}
							else{
						?>
						<?php include "./home_adm.php" ?>
						<?php }?>
					</div>
				</div>				
			</div>
		</div>
		<div class="esquerda">
			<div class="inicial_noticia_titulo">
				Publicidade<br>
				<iframe width="200" height="150" src="http://www.youtube.com/embed/g_4a2qJuV84" frameborder="0" allowfullscreen></iframe><br>
				<br>
				<div class="inicial_notcia_titulo_promocao">Promoção em Destaque</div>
				<div class="inicial_notcia_titulo_empresa">
					<b>Medley</b><br>
					diclofenato de só 50mg 20caps<br>
					<a href="#"><font color="blue" onmouseout="this.color='blue'" onmouseover="this.color='red'"><u>Clique e confira</u></font></a>
					<div class="risco_preto"></div>
				</div>
			</div>
		</div>
	</div>
</div>
