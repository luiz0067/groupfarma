function entrar_campo_buscar(id){
	var texto=document.getElementById(id);
	texto.style.display='none';
}
function sair_campo_buscar(id,campo){
	var texto=document.getElementById(id);
	if((campo.value!=null)&&(campo.value.length!=0))
		return 0;
	texto.style.display='block';
}
function enviar_foco(id){
	var texto=document.getElementById(id);
	texto.focus();
}
function MenuProdutos(){
	var menu=document.getElementById('menu_promocoes');
	menu.style.display='none'
	menu=document.getElementById('menu_produtos');
	if (menu.style.display!='block'){
		menu.style.display='block';
	}
	else{
		menu.style.display='none';
	}
}
function MenuPromocoes(){
	var menu=document.getElementById('menu_produtos');
	menu.style.display='none';
	menu=document.getElementById('menu_promocoes');
	if (menu.style.display!='block'){
		menu.style.display='block';
	}
	else{
		menu.style.display='none';
	}
}
function carregar(){
	var paramenter=getParameter("menu");
	if (paramenter!=null){
		if(paramenter.indexOf("promocoes")){
			MenuPromocoes();
		}else if(paramenter.indexOf("produtos")){
			MenuProdutos();
		}
	}
}
function getParameter(paramenter){
	try{
		var url=top.location.href;
		var posicao=url.indexOf("?");
		var queryString=url.substring(posicao+1)
		var posicao=queryString.indexOf(paramenter+"=");
		if (posicao!=-1){
			var acc=queryString.substring(posicao+paramenter.length+1);
			var posicao=acc.indexOf("&");
			if (posicao==-1)
				posicao=acc.length-1;
			var paramento=acc.substring(0,posicao);
			return paramento;
		}
		else
			return null;
	}
	catch(erro){
		return null;
	}
}