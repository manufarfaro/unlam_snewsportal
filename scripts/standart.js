/**
 * JavaScript Document.
 */

$(document).ready(function(){
	
	try{
		
		// Begin - Menu section
		$('#menu_navigation li').hover(
		        function () {
		            //show its submenu
		            $('ul', this).slideDown(100);
		 
		        },
		        function () {
		            //hide its submenu
		            $('ul', this).slideUp(100);        
		        }
		 );
		// Begin - Menu section
	}catch(error){
		var error_detail = error.message;
		alert("Se ha producido un error, a continuación los detalles del error: " + error_detail);
	}
	
});