$(document).ready(function() {
	//$("#header").css({'height':($("#logo").height()+'px')});
	
	$(window).resize(function() {	//Resizes header if it is still at the top
		if ($("#header").offset().top < 100){
			$("#header").css({'height':($("#logo").height()+'px')});
			$("#header").css('padding-top: 50px;');

		}
		else{						//Else large enough to display stacked
			//header").css('height: 100px');
			$("#navbar").css('top: 0 !important;');
		}
	});

});