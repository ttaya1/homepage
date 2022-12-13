$(function(){
	$('#move-page-top').click(
		function(){
			$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
		}
	);
});
//
//document.onmousedown = function(){return false;}
document.onselectstart = function(){return false;}
document.oncontextmenu = function(){return false;}
//
/*
$(window).load(function() {
	document.getElementById('jsmsg').style.display = "none";
});
*/
