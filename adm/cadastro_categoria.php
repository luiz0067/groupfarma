<?php	
include('cabecalho.php');
	$row=null;
	$result=null;
	$codigo=0;
	if (isset($_POST["codigo"])){
		$codigo=$_POST["codigo"];	
	}
	else if (isset($_GET["codigo"])){
		$codigo=$_GET["codigo"];	
	}
	$nome=0;
	if (isset($_POST["nome"])){
		$nome=$_POST["nome"];	
	}
	else if (isset($_GET["nome"])){
		$nome=$_GET["nome"];	
	}
	if (($codigo!=null)){
		$sql	= "SELECT codigo,nome,empresa FROM categoria  where (empresa=".$_SESSION["empresa"].") and(codigo=0".$codigo.")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
	}
	$buscar="";
	if (isset($_POST["buscar"])){
		$buscar=$_POST["buscar"];	
	}
	else if (isset($_GET["buscar"])){
		$buscar=$_GET["buscar"];	
	}	
	$total="";
	if (isset($_POST["total"])){
		$total=$_POST["total"];	
	}
	else if (isset($_GET["total"])){
		$total=$_GET["total"];	
	}
	$mover="";
	if(isset($_POST["mover"])){
		$mover=$_POST["mover"];	
	}
	else if(isset($_GET["mover"])){
		$mover=$_GET["mover"];	
	}
	
	
	
	
				$acao=0;
				if (isset($_POST["acao"])){
					$acao=$_POST["acao"];	
				}
				else if (isset($_GET["acao"])){
					$acao=$_GET["acao"];	
				}
				
				$acao=0;
				if (isset($_POST["acao"])){
					$acao=$_POST["acao"];	
				}
				else if (isset($_GET["acao"])){
					$acao=$_GET["acao"];	
				}
				
				$registros=0;
				if (isset($_POST["registros"])){
					$registros=$_POST["registros"];	
				}
				else if (isset($_GET["registros"])){
					$registros=$_GET["registros"];	
				}
				if ($acao=='coco'){
				}
				else if ($acao=='excluir'){
					$sql = "delete FROM categoria  where (empresa=".$_SESSION["empresa"].") and (codigo=0".$codigo.")";
					mysql_query($sql, $link);
				}
				else if ($acao=='alterar'){
					$sql = "update categoria set nome='".$nome."'  where (empresa=".$_SESSION["empresa"].") and(codigo=0".$codigo.");";
					//echo $sql;
					mysql_query($sql, $link);
				}
				else if($acao=='inserir'){
					$sql = "insert into categoria (nome,empresa) values ('".$nome."',".$_SESSION["empresa"].");";
					//echo $sql;
					mysql_query($sql, $link);
				}
				
				if($buscar=='buscar por codigo'){
					$sql    = "select codigo,nome,empresa FROM categoria  where (empresa=".$_SESSION["empresa"].") and(codigo=0".$codigo.") and (empresa=".$_SESSION["empresa"].") order by codigo asc";
					//echo $sql;
					mysql_query($sql, $link);
				}
				else if($buscar=='buscar por nome'){
					$sql    = "select codigo,nome,empresa FROM categoria  where (empresa=".$_SESSION["empresa"].") and(nome like '%".$nome."%') and (empresa=".$_SESSION["empresa"].")  order by nome asc";
					//echo $sql;
					mysql_query($sql, $link);
				}
				else 
					$sql    = "SELECT codigo,nome,empresa FROM categoria where (empresa=".$_SESSION["empresa"].") order by nome asc";
	
	
	
	
	//total

			
				$result = mysql_query($sql, $link);
				if (isset($_POST["total"]))
					$total=$_POST["total"];
				else if (isset($_GET["total"]))
					$total=$_GET["total"];
				else
					$total=mySQL_num_rows($result);
									
				if($mover=="primeiro"){
					$limite=" limit 0 , ".$registros;
					$pagina=1;
				}
				else if($mover=="ultimo"){
					//$limite=" limit ".(($_POST["total"]%$_POST["registros"])*$_POST["registros"])." , ".$_POST["total"];
					$pagina=($total-($total%$registros))/$registros;
					$limite=" limit ".($pagina*$registros)." , ".$registros;
					$pagina++;
				}
				else if($mover=="proximo"){
					if ((($pagina+1)*$registros)>$total){
						//$limite=" limit ".(($_POST["total"]%$_POST["registros"])*$_POST["registros"])." , ".$_POST["total"];
						$pagina=($total-($total%$registros))/$registros;
						$limite=" limit ".($pagina*$registros)." , ".$registros;
						$pagina++;
					}
					else{
						//$limite=" limit ".(($_POST["pagina"])*$_POST["registros"])." , ".(($_POST["pagina"]+1)*$_POST["registros"]);
						$limite=" limit ".(($pagina)*$registros)." , ".$registros;
						$pagina=$pagina+1;
					}
				}
				else if($mover=="anterior"){
					if((($pagina-2)*$registros)<0){
						$limite=" limit 0 , ".$registros;
						$pagina=1;
					}
					else{
						//$limite=" limit ".(($_POST["pagina"]-2)*$_POST["registros"])." , ".(($_POST["pagina"]-1)*$_POST["registros"]);
						$limite=" limit ".(($pagina-2)*$registros)." , ".$registros;
						$pagina=$pagina-1;
					}
				}
				else if($mover=="ok"){
					//$limite=" limit ".(($_POST["pagina"]-1)*$_POST["registros"])." , ".(($_POST["pagina"])*$_POST["registros"]);
					$limite=" limit ".(($pagina-1)*$registros)." , ".$registros;
					$pagina=$pagina;
				}
				else{
					$limite=" limit 0 , 10";
					$pagina=1;
				}
				$sql=$sql.$limite.";";
			?>
<center>
	<form method="post">
		<table border="1">
			<tr>
				<td>codigo:</td>
				<td><input type="text" name="codigo" value="<?php if ($result!=null) echo $row["codigo"]?>"></td>
			</tr>
			<tr>
				<td>categoria:</td>
				<td><input type="text" name="nome" value="<?php if ($result!=null) echo $row["nome"]?>"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="acao" value="inserir">
					<input type="submit" name="acao" value="alterar">
					<input type="submit" name="acao" value="excluir">
					<input type="button" value="limpar" onclick="self.location.href='?codigo'">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="buscar" value="buscar por nome">
					<input type="submit" name="buscar" value="buscar por codigo">
				</td>
			</tr>
		</table>
	</form>
			
		<form method="post">
			<input type="hidden" name="codigo" value="<?php echo $codigo;?>">
			<input type="hidden" name="nome" value="<?php echo $nome;?>">
			<input type="hidden" name="buscar" value="<?php echo $buscar;?>">
			<input type="hidden" name="total" value="<?php echo $total?>">
			<table border="0px" cellpadding="0" cellspacing="0">
				<tr>
					<td>pagina:<input type="text" name="pagina" value="<?php echo $pagina;?>" size="3"></td>
					<td>
						<select name="registros">
							<option value="10" <?php if(($registros=="10")||($registros=="")) echo "selected";?> selected>10</option>
							<option value="20" <?php if($registros=="20") echo "selected";?> >20</option>
							<option value="30" <?php if($registros=="30") echo "selected";?> >30</option>
							<option value="40" <?php if($registros=="40") echo "selected";?> >40</option>
							<option value="50" <?php if($registros=="50") echo "selected";?> >50</option>
						</select>
					</td>
					<td><input type="submit" name="mover" value="ok"></td>
				</tr>
			</table>
			Total de categorias encontradas : <?php echo $total;?>
			<table border="0px" cellpadding="0" cellspacing="0">
				<tr>
					<td><input type="submit" name="mover" value="primeiro"></td>
					<td><input type="submit" name="mover" value="anterior"></td>
					<td><input type="submit" name="mover" value="proximo" ></td>
					<td><input type="submit" name="mover" value="ultimo"  ></td>
				</tr>
			</table>
			
		</form>
		<table border="1">
			<tr>
				<td>codigo</td>
				<td>categoria</td>
			</tr>
		<?php
			$result = mysql_query($sql, $link);
			if ($result!=null)
			while ($row = mysql_fetch_assoc($result)){
		?>
				<tr>
					<td><a href="?codigo=<?php echo $row['codigo'];?>" ><?php echo $row['codigo'];?><a/></td>
					<td><?php echo $row['nome'];?>&nbsp </td>       
				</tr>
<?php					
			}
			if ($result!=null){
				mysql_free_result($result);
			}
?>
		</table>
	</center>
<?php include('rodape.php');?>
