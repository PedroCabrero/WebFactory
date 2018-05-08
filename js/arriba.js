// JavaScript Document
$(document).ready(function(){
	//$('p').slideDown(1500); los despliega en cuanto se carga la página
	$('.ir-arriba').click(function(){ //ir-arriba es le nombre de la clase
		$('body,php').animate({
					scrollTop: '0px'//ScrollTop nos desplaza al inicio de la pagina con una velocidad de 600ms
		},300);
	});
	$(window).scroll(function(){	//funcion para hacer aparecer el boton
		if( $(this).scrollTop()>0){ 	//Si esta en el top se esconde con una velocidad d e300ms
			$('.ir-arriba').slideDown(300);
		}
		else{
			$('.ir-arriba').slideUp(300); //Si no, aparece con la misma velocidad
		}
	});
	
	
	$("img").mouseenter(function(){	//Si el mouse esta sobre una imagen
		$(this).fadeTo("fast",.5);	//con fadeTo creas transparencia
	});
	$("img").mouseleave(function(){
		$(this).fadeTo("fast",1);
	}); //	Script para hacer tansparentes las imagenes mientras el cursor esta en ellas.
});

