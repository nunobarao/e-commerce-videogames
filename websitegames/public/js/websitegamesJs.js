/* PROCESSO DA IMAGEM DE FUNDO INICIO */

function loadImg(gameData) { //Recebemos o game Data que é a informação do jogo que contem o url da imagem de fundo
							 // Ou recebemos um url
	//Definimos a variavel img URl que vai ter ou o objecto ou a url que passámos
	var imgUrl = objectOrUrl(gameData);
	//Mostra-mos a div loader com um height de 1200px para que o footer não se cole á barra nav enquanto a imagem carrega
	$('.loader').show();
	//Criamos um novo objecto imagem
    var img = new Image();
    //Quando a imagem estiver completamente carregada
    img.onload = function(){
    	//Processamos as alterações do css e jQuery
      	showAndHide(imgUrl);
      	//Vemos se é preciso ajustar o footer para que não fique um espaço em branco no fim da pagina
      	repositioningFooter();
    };
    //Associamos a imagem que queremos carregar ao objecto imagem que criamos 
    img.src = imgUrl;
}

function objectOrUrl(gameData)
{
	//Vemos se o que recebemos é objecto ou url
	if(typeof gameData === 'string')
		return gameData;
	else
		return gameData.backgroundUrl;
}

function showAndHide(imgUrl)
{
	//Pomos esta imagem na nossa imagem de fundo
	$(".imagemDeFundo").css("background-image","url('"+imgUrl+"')");
	$(".imagemDeFundo").css("background-repeat","repeat-x");
	$(".imagemDeFundo").css("background-position","left top");
	//Mostramos a div onde está a imagem de fundo que está escondida de inicio para não vermos a imagem a carregar
	$('.imagemDeFundo').show();
	//Escondemos o loader image que é a animação que fica enquanto a imagem de fundo carrega
	$('#loader-image').hide();
	//Escondemos a div loader para que desapareca os 1200px entre o footer e a barra nav, porque já temos a imagem
	// carregada e o conteudo no meio
	$('.loader').hide();
}

/* PROCESSO DA IMAGEM DE FUNDO FIM */

/* PROCESSO DE FAZER LOAD DE MAIS JOGOS PARA A LISTA DE JOGOS INICIO */

function loadMoreGamesToList()
{
	alert('Esta parte está por fazer!');
}

/* PROCESSO DE FAZER LOAD DE MAIS JOGOS PARA A LISTA DE JOGOS FIM */

/*PROCESSO DE VERIFICAR E REPOSICIONAR O FOOTER INICIO */

function repositioningFooter(){

	//Vemos buscar os limites do footer, do browser e do doccumento html para podermos ver a que altura ele está no browser
	var size = document.getElementsByClassName("footer")[0].getBoundingClientRect(),
		footerHeight = $('.footer').height(),
		footerMarginTop = $('.footer').css("margin-top"),
		htmlHeight = $(document).height(),
		browserHeight =$(window).height(); 

	//Verificamos se ele está fora do sitio ou não, se tiver reposicionamos
	if(size.bottom < browserHeight)
		$('.content').css('height', htmlHeight - (footerHeight * 2));

	//alert(size.bottom);
	//alert($(document).height());
	//alert(footerMarginTop);
}

/*PROCESSO DE VERIFICAR E REPOSICIONAR O FOOTER FIM */

window.onresize = function(event) {
    repositioningFooter();
}