
$(document).ready(function(){

//导航
var links = $("#nav_in li>a");
     var here = null;
	for(i=0; i<links.length; i++) {
		if(window.location.href.indexOf(links[i].href) != -1) {
			links[i].className = 'active';
			here = links[i];
		} else {
			links[i].className = '';
		}	
	} 
	$("a").bind('focus',function(){ 
        this.blur(); 
    });

});



