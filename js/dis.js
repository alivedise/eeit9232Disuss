$(document).ready(function(){
	var divtype=$(".dispart").css("height");
	if(divtype!="100%"){
		$(".btn").click(function(){
			$(".dispart").css("height","100%");
		});
	}

})