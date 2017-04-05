$(document).ready(function(){
	("#gotop").click(function(){
		$("html,body").animate({scrollTop:$("#top").offset().top},800);

		return false;
	})

})