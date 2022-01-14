
var main_offset=0;

$(function(){

	$(".modal_switch").click(function(){
																		
		var slideTime = 200;
		var menu = $(".modal_menu");

		menu.css('min-height',$(window).height());

		menu.stop(true);

		if(menu.css('display')=='none'){

$("#modal_btn_open").hide();

			main_offset = $(window).scrollTop();

			menu.css('top',main_offset);
			menu.show();

			menu.animate({'right':'0%'},{duration:slideTime,queue:false,complete:function(){
				$("#jjqr_warpper_container").hide(1);
				menu.animate({'top':'0'},{duration:0,queue:false});
				$('html,body').animate({'scrollTop':'0'},{duration:0,queue:false});
			}});
			$("#jjqr_warpper_container").animate({'right':'100%'},{duration:slideTime,queue:false});

		}else{

$("#modal_btn_open").show();

			$("#jjqr_warpper_container").show();
			$(window).scrollTop(main_offset);

			menu.animate({'right':"100%"},{duration:slideTime,queue:false,complete:function(){
				menu.hide(1);
			}});
			$("#jjqr_warpper_container").animate({'right':'0%'},{duration:slideTime,queue:false});
		}

	});//end click
});